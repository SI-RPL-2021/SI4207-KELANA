<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Explore;
use App\Models\Food;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Kelanafriend;
use App\Models\Merchant;
use App\Models\Park;
use App\Models\Story;
use App\Models\Tourguide;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }

    public function handleAdmin()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        $story = Story::select(DB::raw("Count(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = Story::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $data = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
        foreach ($months as $index => $month) {
            $data[$month] = $story[$index];
        };

        return view('admin.dashboard', compact('data'));
    }


    public function explore()
    {
        return view('explore.index');
    }

    public function tempatwisata()
    {
        return view('explore.tempatwisata');
    }
}
