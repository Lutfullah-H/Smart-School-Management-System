<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function home()
    {
        return "This is the home page";
    }

    public function about($id)
    {
        return "this is about page and your id is ".$id;
    }

    public function features($name = "user")
    {
        return "this is features page and your are ".$name;
    }
    public function pricing()
    {
        return "this is pricing page";
    }

    public function contact()
    {
        return "This is contact page";
    }
}
