@props(['title' => 'Default Title'])

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sea n Figure Out | {{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&family=VT323&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/home.css">
        <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/x-icon">
    </head>
    <body>