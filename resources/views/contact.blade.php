@php
    $title = 'contact';
    $description = 'This is the contact page';
    $content = [12, 3, 4, 5, 7, 8, 9, 4, 1234, 63, 5];
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    @include('header')
    <h1 class="title">Benvenuto nella {{$title}}</h1>

    @foreach ($content as $item)
        <p>{{ $item }}</p>
    @endforeach

</body>

<style>
 .title {
    text-align: center;
 }
</style>

</html>
