<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AwalController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('awal', compact('blogs'));
    }
}
