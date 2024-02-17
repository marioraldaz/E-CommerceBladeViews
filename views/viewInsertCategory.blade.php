@extends('layout')

@section('title')

@section('content')
    <form action="" method="post">
        <label for="name">Category Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="parent_category_id">Type of product:</label><br>
        <select name="parent_category_id" id="parent_category_id">
            @foreach ($types as $type)
                <option value="{{ $type['category_id'] }}">{{ $type['name'] }}</option>
            @endforeach
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
