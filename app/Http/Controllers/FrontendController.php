<?php

namespace App\Http\Controllers;

use App\Models\admin\AboutUs;
use App\Models\admin\Blog;
use App\Models\admin\Configuration;
use App\Models\admin\Contact;
use App\Models\admin\Message;
use App\Models\admin\Service;
use App\Models\admin\Slider;
use App\Models\admin\Superiority;
use App\Models\admin\TestimonialClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    private function getCommonData()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $aboutUs = AboutUs::first();

        return compact('configuration', 'contact', 'aboutUs');
    }

    public function index()
    {
        // Gabungkan data umum dengan view
        $sliders = Slider::all();
        $serviceTotal = Service::count();
        $blogTotal = Blog::count();
        $testimonials = TestimonialClient::all();
        $superioritys = Superiority::all();
        $services = Service::all();
        return view('frontend.index', compact('sliders', 'serviceTotal', 'blogTotal', 'testimonials', 'superioritys', 'services'))->with($this->getCommonData());
    }

    public function about()
    {
        // Gabungkan data umum dengan view
        return view('frontend.about')->with($this->getCommonData());
    }

    public function promo()
    {
        // Gabungkan data umum dengan view
        return view('frontend.promotion')->with($this->getCommonData());
    }

    public function services()
    {
        // Gabungkan data umum dengan view
        return view('frontend.services')->with($this->getCommonData());
    }

    public function DetailService($category_id)
    {
        // Gabungkan data umum dengan view
        return view('frontend.service-detail')->with($this->getCommonData());
    }

    public function blog()
    {
        // Gabungkan data umum dengan view
        return view('frontend.blog')->with($this->getCommonData());
    }

    public function search(Request $request)
    {
        // Gabungkan data umum dengan view
        return view('frontend.blog')->with($this->getCommonData());
    }

    public function detailblog($id)
    {
        // Gabungkan data umum dengan view
        return view('frontend.blog-details')->with($this->getCommonData());
    }

    public function categoryBlog($category_id)
    {
        // Gabungkan data umum dengan view
        return view('frontend.blog')->with($this->getCommonData());
    }

    public function notFound()
    {
        // Gabungkan data umum dengan view
        return view('frontend.not-found')->with($this->getCommonData());
    }

    public function contact()
    {
        // Gabungkan data umum dengan view
        return view('frontend.contact')->with($this->getCommonData());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        $recaptchaSecret = '6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd';
        $recaptchaResponse = $request->input('g-recaptcha-response');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
        ]);

        $result = $response->json();

        if (!$result['success']) {
            return redirect()->back()->with('error', 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.');
        }

        try {
            Message::create($validatedData);

            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
