<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        // $i=0;
        $products = [
            (object)['title'=>['Blended to Perfection','Coffees & Teas'],'text'=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",'img'=>'/img/products-01.jpg'],
            (object)['title'=>['Delicious Treats, Good Eats','Bakery & Kitchen'],'text'=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",'img'=>'/img/products-02.jpg'],
            (object)['title'=>['From Around The World','Bulk Specialty Blends'],'text'=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.",'img'=>'/img/products-03.jpg'],
        ];
        return view('pages.products',compact('products'));
    }
}
