<?php

namespace App\Http\Controllers;

use App\Models\admin\AboutUs;
use App\Models\admin\Blog;
use App\Models\admin\Configuration;
use App\Models\admin\Contact;
use App\Models\admin\Gallery;
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
        $testimonials = TestimonialClient::take(3)->get();
        $superioritys = Superiority::all();
        $services = Service::all();
        $gallerys = Gallery::all();
        $blogs = Blog::take(3)->get();
        $gallery = Gallery::first();
        return view('frontend.index', compact('sliders', 'serviceTotal', 'blogTotal', 'testimonials', 'superioritys', 'services', 'gallerys', 'blogs', 'gallery'))->with($this->getCommonData());
    }

    public function about()
    {
        // Gabungkan data umum dengan view
        $testimonials = TestimonialClient::take(3)->get();
        $superioritys = Superiority::all();
        return view('frontend.about', compact('testimonials', 'superioritys'))->with($this->getCommonData());
    }

    public function promo()
    {
        // Gabungkan data umum dengan view
        return view('frontend.promotion')->with($this->getCommonData());
    }

    public function services()
    {
        // Gabungkan data umum dengan view
        $services = Service::all();
        return view('frontend.services', compact('services'))->with($this->getCommonData());
    }

    public function DetailService($id)
    {
        // Gabungkan data umum dengan view
        $services = Service::all();
        $service = Service::findOrFail($id);
        return view('frontend.service-detail', compact('services',  'service'))->with($this->getCommonData());
    }

    public function blog()
    {
        // Gabungkan data umum dengan view
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('frontend.blog', compact('blogs'))->with($this->getCommonData());
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $blogs = Blog::where('title', 'like', '%' . $keyword . '%')->get();
        return view('frontend.blog', ['blogs' => $blogs, 'keyword' => $keyword])->with($this->getCommonData());
    }

    public function detailblog($id)
    {
        // Gabungkan data umum dengan view
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $blog = Blog::findOrFail($id);
        return view('frontend.blog-detail', compact('blog', 'blogs'))->with($this->getCommonData());
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
}
