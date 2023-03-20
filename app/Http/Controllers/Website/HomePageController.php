<?php

namespace App\Http\Controllers\website;
use App\Models\Event;
use App\Models\slider;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\partner;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $sliders=Slider::select(
            'media',
            'title_'.app()->getLocale() .' as  title',
            'desc_'.app()->getLocale() .' as  desc')->get();
            $events=Event::select(
                'id',
                'date',
                'media',
                'name_'.app()->getLocale() .' as  name',
                'desc_'.app()->getLocale() .' as  desc')->get();
                $settings=Setting::select(
                     'type',
                     'media',
                     'title_'.app()->getLocale() .' as  title',
                     'desc_'.app()->getLocale() .' as  desc')->where('type','our message')->get();
                     $settings2=Setting::select(
                        'type',
                        'media',
                        'title_'.app()->getLocale() .' as  title',
                        'desc_'.app()->getLocale() .' as  desc')->where('type','our vision')->get();
                     $partners=Partner::select(
                        'link',
                        'media',
                        'title_'.app()->getLocale() .' as  title')->get();
                        $services=Service::select(
                            'id',
                            'created_at',
                            'media',
                            'desc_'.app()->getLocale() .' as  desc',
                            'title_'.app()->getLocale() .' as  title')->get();
    
                            $clients=Client::select(
                                'id',
                                'created_at',
                                'media',
                                'desc_'.app()->getLocale() .' as  desc',
                                'title_'.app()->getLocale() .' as  title')->get();
        
        return view("website.welcome",compact("events","sliders","settings","partners","settings2","services","clients"));
    }
    

    
}
