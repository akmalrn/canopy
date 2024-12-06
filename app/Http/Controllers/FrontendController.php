<?php

namespace App\Http\Controllers;

use App\Models\admin\AboutUs;
use App\Models\admin\Blog;
use App\Models\admin\CategoryBlog;
use App\Models\admin\CategoryService;
use App\Models\admin\Slider;
use App\Models\admin\Configuration;
use App\Models\admin\Contact;
use App\Models\admin\Gallery;
use App\Models\admin\Message;
use App\Models\admin\OurTeam;
use App\Models\admin\Partner;
use App\Models\admin\Pricing;
use App\Models\admin\Service;
use App\Models\admin\Superiority;
use App\Models\admin\TestimonialClient;
use App\Models\admin\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $sliders = Slider::all();
        $superioritys = Superiority::all();
        $gallerys = Gallery::all();
        $mitras = Partner::all();
        $blogs = Blog::all();
        $categoryservices = CategoryService::all();
        return view('frontend.index', compact('sliders', 'contact', 'about', 'configuration', 'superioritys', 'gallerys', 'mitras', 'blogs', 'categoryservices'));
    }

    public function about()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $testimonials = TestimonialClient::take(5)->get();
        $feature = WhyUs::first();
        $about = AboutUs::first();
        $teams = OurTeam::all();
        $mitras = Partner::all();
        $promo = Pricing::take(3)->get();
        $categoryservices = CategoryService::all();
        return view('frontend.about', compact('configuration', 'contact', 'testimonials', 'feature', 'about', 'teams', 'mitras', 'promo', 'categoryservices'));
    }

    public function promo()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $promo = Pricing::all();
        $categoryservices = CategoryService::all();
        return view('frontend.promotion', compact('configuration', 'contact', 'about', 'promo', 'categoryservices'));
    }

    public function services()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $categoryservices = CategoryService::all();
        $services = Service::all();
        return view('frontend.unit-type', compact('configuration', 'contact', 'about', 'categoryservices', 'services'));
    }

    public function DetailService($category_id)
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $categoryservices = CategoryService::all();
        $category = CategoryService::findOrFail($category_id);
        $services = Service::with(['paths', 'buildingServices'])
        ->where('category_id', $category_id)
        ->get();

        return view('frontend.unit-type-detail', compact('configuration', 'contact', 'about', 'categoryservices', 'category', 'services'));
    }


    public function blog()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $categories = CategoryService::all();
        $categoryservices = CategoryService::all();
        return view('frontend.blog', compact('configuration', 'contact', 'about', 'blogs', 'categories', 'categoryservices'));
    }

    public function search(Request $request)
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $query = $request->input('search');
        $blogs = Blog::where('title', 'like', '%' . $query . '%')
            ->orderBy('created_at', 'desc')
            ->get();
            $categoryservices = CategoryService::all();
        return view('frontend.blog', compact('configuration', 'contact', 'about', 'blogs', 'categories', 'categoryservices'));
    }

    public function detailblog($id)
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $blog = Blog::findOrFail($id);
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $categories = CategoryBlog::all();
        $categoryservices = CategoryService::all();
        return view('frontend.blog-details', compact('configuration', 'contact', 'about', 'blog', 'blogs', 'categories', 'categoryservices'));
    }

    public function categoryBlog($category_id)
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $category = CategoryBlog::find($category_id);
        if (!$category) {
            return redirect()->route('home')->with('error', 'Kategori tidak ditemukan');
        }
        $blogs = Blog::where('category_id', $category_id)->get();
        $categoryservices = CategoryService::all();
        return view('frontend.blog', compact('configuration', 'contact', 'about', 'blogs', 'category', 'categoryservices'));
    }

    public function notFound()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $categoryservices = CategoryService::all();
        return view('frontend.not-found', compact('configuration', 'contact', 'about', 'categoryservices'));
    }

    public function contact()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $mitras = Partner::all();
        $about = AboutUs::first();
        $categoryservices = CategoryService::all();
        return view('frontend.contact', compact('configuration', 'contact', 'mitras', 'about', 'categoryservices'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'description' => 'required|string',
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
