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
        DB::table('products')->insert([
            [
                'name'=>'Apple Laptop',
                "price"=>"120000",
                "description"=>"Apple Laptop with 8GB RAM and 250 GB SSD",
                "category"=>"Computer",
                "gallery"=>"https://imageio.forbes.com/specials-images/imageserve/61086ec373551e86331910e3/0x0.jpg?format=jpg&width=1200",
    
                
            ],
            [
                'name'=>'Dell Laptop',
                "price"=>"70000",
                "description"=>"Dell Laptop with 8GB RAM",
                "category"=>"Computer",
                "gallery"=>"https://www.computerrepair.com.my/wp-content/uploads/2018/11/dell-laptop.jpg",
    
                
            ],
            [
                'name'=>'Apple Phone',
                "price"=>"900000",
                "description"=>"Phone with much more feature",
                "category"=>"Phone",
                "gallery"=>"https://www.google.com/search?q=apple+phone&sxsrf=AJOqlzVY5lsWq2qgLBL5tPmIkQ0gDWJJxA:1677655984592&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjh-5DIm7r9AhUe-DgGHXU7BqgQ_AUoAXoECAEQAw&biw=1366&bih=663&dpr=1#imgrc=S4MHfl4DZsN1PM",
    
                
            ],
            [
                'name'=>'Hitachi Fridge',
                "price"=>"130000",
                "description"=>"Fridge with much more feature",
                "category"=>"Fridge",
                "gallery"=>"https://satkhiraservice.com/wp-content/uploads/2021/05/R-W690P3PB.jpg",
    
                
            ],
            [
                'name'=>'Panasonic LED TV',
                "price"=>"60000",
                "description"=>"TV with more attractive feature",
                "category"=>"Television",
                "gallery"=>"https://iristechworld.com/wp-content/uploads/2021/05/TH-32GS400T-1.jpg",
    
                
            ]
        ]);
    }
}
