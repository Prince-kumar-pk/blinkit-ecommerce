<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Haldirams Punjabi Tadka',
                "price"=>'54',
                "description"=>"A smartphone with 5gb ram and 256gb storage and many more features",
                "category"=>"snacks",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=270/app/images/products/sliding_image/608a.jpg?ts=1689327547",
            ],
            [
                'name'=>'Aashirvaad Atta',
                "price"=>'285',
                "description"=>"Aashirvaad Select Whole Wheat Sharbati Atta",
                "category"=>"aata",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=270/app/images/products/sliding_image/7a.jpg?ts=1698594693",
            ],
            [
                'name'=>'Patanjali aata',
                "price"=>'214',
                "description"=>"Patanjali Whole Wheat Chakki Atta (with Bran) 5 kg",
                "category"=>"aata",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=900/app/images/products/sliding_image/55389a.jpg?ts=1686225012",
            ],
            [
                'name'=>' Fortune Premium mustard oil ',
                "price"=>'134',
                "description"=>"Fortune Premium Kachi Ghani Pure Mustard Oil",
                "category"=>"oil",
                "gallery"=>"https://www.bigbasket.com/media/uploads/p/xxl/276756_8-fortune-fortune-premium-kachi-ghani-pure-mustard-oil.jpg",
            ],
            [
                'name'=>'Tata Salt',
                "price"=>'30',
                "description"=>"Tata Salt (Vacuum Evaporated Iodised Salt)",
                "category"=>"salt",
                "gallery"=>"https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=70,metadata=none,w=900/app/images/products/sliding_image/105a.jpg?ts=1676867721",
            ],


            [
                'name'=>'Kelloggs Corn Flakes Original 1.2kg',
                "price"=>'240',
                "description"=>"A Kellogg's Corn Flakes Original 1.2kg | Power of 5: Energy, Protein, Iron, IMMUNO NUTRIENTS, Vitamins B1, B2, B3 & C| Corn Flakes, Breakfast Cereal",
                "category"=>"snacks",
                "gallery"=>"https://m.media-amazon.com/images/I/81ZFhqrMufL._SX679_.jpg",
            ],
            [
                'name'=>'Cadbury Bournvita',
                "price"=>'285',
                "description"=>"Cadbury Bournvita Chocolate Health Drink, 2 kg",
                "category"=>"health",
                "gallery"=>"https://m.media-amazon.com/images/I/71foBxdA7tL._SX679_.jpg",
            ],
            [
                'name'=>'Oreo Cadbury Vanilla ',
                "price"=>'30',
                "description"=>"Oreo Cadbury Vanilla Flavour Chocolatey Sandwich Biscuit, 288.75 G",
                "category"=>"snacks",
                "gallery"=>"https://m.media-amazon.com/images/I/61XPqdX0AjL._SX679_.jpg",
            ],
            [
                'name'=>' Original Peanut Butter Crunchy ',
                "price"=>'540',
                "description"=>"MYFITNESS Original Peanut Butter Crunchy 510g | 25g Protein to Boost Energy | Tasty & Healthy Nut Butter Spread | Vegan | Cholesterol Free, Gluten Free | Zero Trans Fat | Crunchy Peanut Butter",
                "category"=>"health",
                "gallery"=>"https://m.media-amazon.com/images/I/61YRzZhKASL._SX679_.jpg",
            ],
            [
                'name'=>'Lays Sizzlin Hot Potato Chips',
                "price"=>'30',
                "description"=>"Lay's Sizzlin’ Hot Potato Chips 40g/48g/50g, Crispy Wavy Chips and Snacks (weight may vary)",
                "category"=>"snacks",
                "gallery"=>"https://m.media-amazon.com/images/I/71AuTPJ0veL._SX679_.jpg",
            ],
        ]);
    }
}
