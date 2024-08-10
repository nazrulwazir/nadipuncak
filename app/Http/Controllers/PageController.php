<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function aboutBackground()
    {
        return view('site.about-background');
    }

    public function aboutOrganisation()
    {
        return view('site.about-organisation');
    }

    public function services()
    {
        return view('site.services');
    }

    public function portfolio()
    {
        $projects = [
            [
                'title' => 'Cable Work in Padang Besar',
                'description' => 'Telecommunication cable work in Padang Besar.',
                'image' => 'portfolio-1.jpg', // Replace with actual image file names
            ],
            [
                'title' => 'Infra Telekomunikasi Project',
                'description' => 'Telecommunication Infrastructure Project at Sekolah Kebangsaan Padang Besar, Perlis.',
                'image' => 'portfolio-2.jpg', // Replace with actual image file names
            ],
            [
                'title' => 'CIVIA Area Cleaning',
                'description' => 'Cleaning of the Chuping Valley Industrial Area in Chuping, Perlis.',
                'image' => 'portfolio-3.jpg', // Replace with actual image file names
            ],
            [
                'title' => 'Telecommunications Pipe Repair & Cable Pulling',
                'description' => 'Repairing telecommunications pipes and pulling cables.',
                'image' => 'portfolio-4.jpg', // Replace with actual image file names
            ],
            [
                'title' => 'Celcom Project - Civil Work for Microduct Pipe Laying',
                'description' => 'Civil work for laying microduct pipes as part of the Celcom Project.',
                'image' => 'portfolio-5.jpg', // Replace with actual image file names
            ],
            [
                'title' => 'MSAR Project - Civil Work',
                'description' => '12 Kilometer Civil Work for MSAR Project.',
                'image' => 'portfolio-6.jpg', // Replace with actual image file names
            ],
            [
                'title' => 'TM Infra Project',
                'description' => 'Telecommunications Infrastructure project from Chuping to Padang Besar.',
                'image' => 'portfolio-1.jpg', // Replace with actual image file names
            ],
        ];

        return view('site.portfolio', compact('projects'));
    }

    public function licenses()
    {
        $licenses = [
            ['image' => '1.jpg', 'title' => 'SSM'],
            ['image' => '2.jpg', 'title' => 'CIDB'],
            ['image' => '3.jpg', 'title' => 'MOF'],
            ['image' => '4.jpg', 'title' => 'MOF'],
        ];

        return view('site.licenses', compact('licenses'));
    }

    public function gallery()
    {
        $galleryImages = [
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
            ['image' => '1.jpg', 'title' => 'Project 1'],
            ['image' => '2.jpg', 'title' => 'Project 2'],
        ];

        return view('site.gallery', compact('galleryImages'));
    }

    public function contact()
    {
        return view('site.contact');
    }
}
