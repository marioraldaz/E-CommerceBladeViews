@extends('layout')

@section('title')

@section('content')
    <form action="" method="post">

        <label for="name">Product Name:</label><br>
        <input type="text" value="{{ $product['name'] }}" id="name" name="name"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $product['description'] }}</textarea><br>

        <label for="price">Price:</label><br>
        <input type="number" value="{{ $product['price'] }}" id="price" name="price"><br>

        <label for="category_id">Category</label><br>
        <select id="category_id" name="category_id">
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}" {{ $id == $product['category_id'] ? 'selected' : '' }}>
                    {{ $name }}</option>
            @endforeach
        </select>
        <br>
        <input type="hidden" name="product_id" value="{{ $product['product_id'] }}" />
        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
