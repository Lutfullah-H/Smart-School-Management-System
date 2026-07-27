<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function home()
    {
        $schoolName = "Smart School Management System";
        $version = "1.0.0";
        $academicYear = "2026";

        return view('pages.home', compact('schoolName', 'version', 'academicYear'));
    }

    public function about()
    {
         $schoolName = "Smart School Management System";
        $academicYear = "2026";

        return view('pages.about', compact('schoolName','academicYear'));
    }

    public function features()
    {
        $features = [
        "Student Management",
        "Teacher Management",
        "Attendance Management",
        "Fee Management"
        ];
        return view('pages.features', compact('features'));
    }
    public function pricing()
    {
        $plans = [
            [
                'name' => 'Basic',
                'price' => 100,
            ],
            [
                'name' => 'Professional',
                'price' => 250,
            ],
            [
                'name' => 'Enterprise',
                'price' => 500,
            ],

        ];
        return view('pages.pricing', compact('plans'));
    }

    public function contact()
    {
        $email = "hoshvision.hv@gmail.com";
        $phone = "+93 749178599";

        return view('pages.contact', compact('email', 'phone'));
    }
}
