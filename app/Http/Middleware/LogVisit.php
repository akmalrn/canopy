<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LogVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        // Melanjutkan request dan mendapatkan respons
        $response = $next($request);

        // Mengecek apakah respons adalah instance dari Response dan statusnya bukan 404
        if (auth()->guest() && $response instanceof \Illuminate\Http\Response) {
            // Cek status kode apakah 404, jika iya, tidak lakukan pencatatan
            if ($response->getStatusCode() !== 404) {
                $ipAddress = $request->ip();
                $timezone = 'Asia/Jakarta';
                $visitedAt = now()->setTimezone($timezone);

                // Meminta data lokasi berdasarkan IP address
                $apiResponse = Http::timeout(30)  // Timeout after 30 seconds
                    ->get("http://ip-api.com/json/{$ipAddress}");

                $data = $apiResponse->json();

                Log::info('IP API Response', $data);

                // Menentukan lokasi negara/kota berdasarkan response
                $country = isset($data['status']) && $data['status'] === 'success'
                    ? "{$data['city']}, {$data['regionName']}"
                    : 'Unknown Location';

                // Menyimpan data kunjungan ke database
                Visit::create([
                    'ip_address' => $ipAddress,
                    'country' => $country,
                    'visited_at' => $visitedAt,
                ]);
            }
        }

        // Jika response bukan instance dari Response (misalnya View), kita perlu mengonversinya menjadi Response
        if ($response instanceof \Illuminate\View\View) {
            return response($response);
        }

        return $response;
    }

}
