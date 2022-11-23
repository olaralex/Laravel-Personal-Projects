<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function service()
    {
        $var = [
            'copywrite' => '©'
        ];

        $title_page = [
            'title' => 'Services'
        ];

        $services = Service::all();

        $name = request('name');

        return view('services',$var ,$title_page)->with(['services' => $services], ['name' => $name]);
    }

    public function design()
    {
        $var = [
        'copywrite' => '©'
        ];

        $title_page = [
            'title' => 'Web Design'
        ];

        $services = Service::all();

        $name = request('name');

        return view('web-design',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
    }

    public function dev()
    {
        $var = [
            'copywrite' => '©'
        ];

        $title_page = [
            'title' => 'Web Development'
        ];

        $services = Service::all();

        $name = request('name');

        return view('web-development',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
    }

    public function cons()
    {
        $var = [
            'copywrite' => '©'
        ];

        $title_page = [
            'title' => 'Consulting'
        ];

        $services = [
            ['type' => 'web design', 'price' => '150$'],
            ['type' => 'web development', 'price' => '300$'],
            ['type' => 'consulting', 'price' => '50$/hour']
        ];

        $name = request('name');

        return view('consulting',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
    }
}
