<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    @yield('title')

    @yield('style')

    @vite('resources/assets/sass/admin.scss')
    @vite('resources/assets/fonts/css/all.scss')

</head>
<body>

@include('admin.partials._navbar')
