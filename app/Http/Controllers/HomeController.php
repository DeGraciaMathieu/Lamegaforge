<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = app('services\video')->getVideosForDashboardCarousel();
        $twitch = app('services\twitch')->getActiveTwitchInfos();

        return view('home', ['videos' => $videos, 'twitch' => $twitch]);
    }
}
