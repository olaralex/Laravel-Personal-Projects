<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    // Service Funcion

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

    // Design Function

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

    // Development Function

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

    // Consulting Function

    public function cons()
    {
        $var = [
            'copywrite' => '©'
        ];

        $title_page = [
            'title' => 'Consulting'
        ];

        $services = Service::all();

        $name = request('name');

        return view('consulting',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
    }

    // Store Function

    public function store()
    {
        error_log(request('value'));
        return redirect('/');
    }
}
