<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function listings()
    {
        return view('frontend.listing');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function privacy()
    {
        return view('frontend.privacy');
    }
}
