<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Danhmuccon;
use App\Models\Post;
use App\Models\Anhtt;
use App\Models\Sanpham;
use App\Models\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
       
        $danhmuc = getDanhmuc(null);
        View::share('danhmuc',  $danhmuc);
        

        $banner = Sanpham::orderBy('id', 'desc')->take(3)->get();
        $index = [];
        foreach($banner as $bn){
            array_push($index, $bn->id);
        }
        $baiviet_2 = Sanpham::orderBy('id', 'desc')->take(4)->get();
        foreach($baiviet_2 as $bv_2){
            array_push($index, $bv_2->id);
        }

        // return $baiviet_3;
        $tintuc = Sanpham::whereNotIn('id', $index)->orderBy('id', 'desc')->take(4)->get();
        // return $baiviet_4;
        
        
        View::share('tintuc',  $tintuc);
        View::share('chitietsanpham',  $tintuc);

        
    }
}
