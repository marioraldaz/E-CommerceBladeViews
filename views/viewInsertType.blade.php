@extends('layout')

@section('title', $titulo)

@section('content')
    <form action="process_category_form.php" method="post">
        <label for="name">Type Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <input type="submit" value="Submit">
    </form>
@endsection
