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

        <label for="category_id">Category</label><br>
        <select id="category_id" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category['category_id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
