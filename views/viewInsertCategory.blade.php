@extends('layout')

@section('title')

@section('content')
    <form action="process_category_form.php" method="post">
        <label for="name">Category Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="parent_category_id">Type of product:</label><br>
        <input type="number" id="parent_category_id" name="parent_category_id"><br>

        <input type="submit" value="Submit">
    </form>
@endsection
