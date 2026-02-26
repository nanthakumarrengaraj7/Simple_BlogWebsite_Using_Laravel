<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $titles = [
            "Mastering Laravel Basics",
            "Understanding MVC Architecture",
            "Getting Started with MySQL",
            "Building Your First CRUD App",
            "Laravel Routing Deep Dive",
            "Eloquent ORM Explained",
            "Blade Template Tips & Tricks",
            "Form Validation in Laravel",
            "Working with Migrations",
            "Deploying Laravel Projects"
        ];

        $contents = [
            "Laravel is a powerful PHP framework that makes web development simple and elegant. In this article, we explore the fundamentals and how to set up your first project.",

            "MVC stands for Model View Controller. It separates logic, UI, and data handling to make applications structured and maintainable.",

            "MySQL is a popular relational database system. In this guide, we learn how to connect MySQL with Laravel and perform basic operations.",

            "CRUD operations are the backbone of any application. Learn how to Create, Read, Update, and Delete records using Laravel.",

            "Routing is how Laravel responds to user requests. Let's understand how routes connect URLs to controllers.",

            "Eloquent ORM provides an easy ActiveRecord implementation for working with your database. No need to write complex SQL queries.",

            "Blade is Laravels templating engine. It allows clean and reusable layouts using simple syntax.",

            "Validation ensures user input is safe and correct. Laravel provides powerful validation rules out of the box.",

            "Migrations act like version control for your database. They help manage table structure changes efficiently.",

            "Once your project is ready, deployment is the final step. Learn how to push your Laravel app to a live server."
        ];
        $img_urls = [
            "https://picsum.photos/id/1/800/400",
            "https://picsum.photos/id/2/800/400",
            "https://picsum.photos/id/3/800/400",
            "https://picsum.photos/id/4/800/400",
            "https://picsum.photos/id/5/800/400",
            "https://picsum.photos/id/6/800/400",
            "https://picsum.photos/id/7/800/400",
            "https://picsum.photos/id/8/800/400",
            "https://picsum.photos/id/9/800/400",
            "https://picsum.photos/id/10/800/400"
        ];

        foreach ($titles as $index => $title) {
            DB::table('posts')->insert([
                'title' => $title,
                'content' => $contents[$index],
                'img_url' => $img_urls[$index],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
