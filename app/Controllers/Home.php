<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "head" => [
                "title" => "Your Digital Transformation Partner | Digital Makers",
                "description" => "Digital Makers is a Leading Web Development, SEO, Editing, Designing and Digital Services agency based in India, committed to helping businesses grow online.",
                "keywords" => "digital makers, digital makers india, .in, digitalmakers.in, web development, web designing, seo, wikipedia page creation, video editing, voice editing, social media management, digital marketing, branding, digital transformation, online presence"
            ],
        ];        
        return view('index', $data);
    }
}
