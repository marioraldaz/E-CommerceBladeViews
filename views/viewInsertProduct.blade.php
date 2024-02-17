@extends('layout')

@section('title')

@section('content')
    <form action="" method="post">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price"><br>

        <label for="category_id">Category ID:</label><br>
        <input type="number" id="category_id" name="category_id"><br>

        <label for="product_id">Product ID:</label><br>
        <input type="number" id="product_id" name="product_id"><br>

        <input type="submit" value="Submit">
    </form>
@endsection
