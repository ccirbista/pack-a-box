<!DOCTYPE html>
<html>
<head>
<title>Pack a Box</title>
</head>
<body>

    <h1>Product List</h1>

    <form method="GET" action="#">
        <input type="text" name="search" placeholder="Search a product" value="{{ request('search') }}" >
    
    </form>

    <form method="POST" action="/products/multiple">
        @csrf
    <ul>
        @foreach($products as $item)
            <a href="/products/{{ $item->name }}"> <h4>{{ $item->name }} </h4> </a>
            <input type="checkbox" name="boxed_item[]" value={{ $item }}>
            <label for={{ $item->name }} > Box this product </label>
            <h4> {{ $item->length }}</h4>
            <h4> {{ $item->width }}</h4>
            <h4> {{ $item->height }}</h4>
        @endforeach
    </ul>

    <button type="submit"><h4>Find box for multiple products</h4></button>
    </form>

</body>
</html>