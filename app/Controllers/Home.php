<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "head" => [
                "title" => "Digital Makers - Your Digital Transformation Partner",
                "description" => "Digital Makers is a leading web development, SEO, editing, designing and digital services agency based in India, committed to helping businesses grow online.",
                "keywords" => "digital makers, digital makers india, .in, digitalmakers.in, web development, web designing, seo, wikipedia page creation, video editing, voice editing, social media management, digital marketing, branding, digital transformation, online presence"
            ],
        ];        
        return view('index', $data);
    }
}
