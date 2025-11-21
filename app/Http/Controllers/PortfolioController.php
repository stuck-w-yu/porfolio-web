<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Data diambil dari gambar PDF Anda
        $profile = [
            'name' => 'Wahyu Firmansyah',
            'intro' => 'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet...',
            'instagram' => 'stuckw.yu_',
            'email' => 'xwoner38@gmail.com'
        ];

        // Simulasi data project (Project 1 berulang sesuai gambar)
        $projects = [
            [
                'title' => 'PROJECT 1',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam expedita minus quis sint suscipit.',
                'image' => 'https://via.placeholder.com/150' // Placeholder image
            ],
            [
                'title' => 'PROJECT 1',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam expedita minus quis sint suscipit.',
                'image' => 'https://via.placeholder.com/150'
            ],
            [
                'title' => 'PROJECT 1',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => 'https://via.placeholder.com/150'
            ],
            [
                'title' => 'PROJECT 1',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => 'https://via.placeholder.com/150'
            ],
        ];

        return view('portfolio', compact('profile', 'projects'));
    }
}
