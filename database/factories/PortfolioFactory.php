<?php

use Faker\Generator as Faker;
use TCG\Voyager\Models\Category;

$factory->define(App\Portfolio::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence(), 
        'seo_title' => $faker->sentence(),  
        'excerpt'=> $faker->sentences($nb = 3, $asText = true),
        'body' => $faker->paragraphs(rand(2,10), true), 
        'slug' => $faker->sentence(), 
        'meta_description' =>$faker->sentence(), 
        'meta_keywords' => implode(',',($faker->randomElements($array = array('website','desgin','android','programming','application','e-commerce')))),
        'status' => "PUBLISHED",
        'author_id' => 1,
        'image1' => $faker->imageUrl($width = 640, $height = 480),
        'image2' => $faker->imageUrl($width = 640, $height = 480),
        'image3' => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => Category::all()->random()->id,
    ];
});
