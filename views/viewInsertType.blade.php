@extends('layout')

@section('title', $titulo)

@section('content')
    <form action="" method="post">
        <label for="name">Type Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
