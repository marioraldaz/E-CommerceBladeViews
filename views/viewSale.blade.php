@extends('layout')

@section('title')

@section('content')
    <form action="" method="post">
        <table>
            <tr>
                @foreach ($products[0] as $key => $value)
                    <th>{{ $key }}</th>
                @endforeach
                <th>Amount</th>
                <th>Actions</th>
            </tr>
            @foreach ($cartProducts as $product)
                <tr>
                    <td>{{ $product['product_id'] }}</td>
                    <td>
                        <option value="{{ $product['product_id'] }}">{{ $product['name'] }}</option>
                    </td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $categories["$product[category_id]"] }}</td>
                    <td>No Image</td>
                    <td>{{ $product['created_at'] }}</td>
                    <td>{{ $product['amount'] }}</td>
                    <td><input type="submit" value="{{ $product['product_id'] }}" name="product_to_remove">Remove From
                        Cart</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <input type="submit" value="Empty Cart" name="empty_cart" />
        <table>
            <tr>
                @foreach ($products[0] as $key => $value)
                    <th>{{ $key }}</th>
                @endforeach
                <th>Actions</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['product_id'] }}</td>
                    <td>
                        <option value="{{ $product['product_id'] }}">{{ $product['name'] }}</option>
                    </td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $categories["$product[category_id]"] }}</td>
                    <td>No Image</td>
                    <td>{{ $product['created_at'] }}</td>
                    <td><input type="submit" value="{{ "$product[product_id]" }}" name="product_to_add">
                    </td>
                </tr>
            @endforeach
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
@endsection
