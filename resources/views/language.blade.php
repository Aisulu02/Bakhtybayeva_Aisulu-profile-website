<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language</title>
</head>
<body>
@extends('layout')
@section('content')
    <h1> {{__('lang.hello')}} </h1>
    <h2> {{__('lang.title')}} </h2>
    <h3> {{__('lang.body')}} </h3>

    <h4> {{__("Scorpio's attitude to the world around him largely depends on what he has managed to achieve in life.")}} </h4>
@endsection
</body>
</html>