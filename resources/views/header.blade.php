<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

  <link rel = "stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>

<nav>
     <!-- navbar in here -->
    <div class = "max-w-8xl mx-auto">
        <div class = "flex justify-between">
            <div class = "flex ml-4 space-x-4">
                <!-- Logo -->
                <div class = "flex">
                    <a class = "flex items-center py-2 px-3 text-green-900" href = "#">
                    <img class = "h-10 w-10 mr-1" src = "/images/LAMB-ID-Icon-Green.png">
                    <span class = "font-bold text-green-600">LAMBENT</span>
                    </a>
                </div>

                <!-- Primary Nav -->
                <div class = "flex items-center space-x-3">
                    <a href="" class = "py-2 px-3 text-indigo-900 hover:text-blue-900">Features</a>
                    <a href="" class = "py-2 px-3 text-indigo-900 hover:text-blue-900">Blogs</a>
                </div>
            </div>
                <!-- Secondary Nav -->
                <div class = "flex items-center space-x-3 mr-4">
                    <a href="#" class = "py-2 px-3 text-indigo-900">LogIn</a>
                    <a href="#" class = "py-2 px-3 text-blue-900 bg-blue-500 hover:bg-blue-900 hover:text-blue-50 rounded">SignUp</a>
                </div>
        </div>
    </div>

<!-- Mobile Nav -->
</nav>