<!DOCTYPE html>
<html>
<head>
<title>Pack a Box</title>
</head>
<body>

    <h1>Product List</h1>

    <ul>
        @foreach($products as $item)
            <a href="/products/{{ $item->name }}"> <h4>{{ $item->name }} </h4> </a>
            <h4> {{ $item->length }}</h4>
            <h4> {{ $item->width }}</h4>
            <h4> {{ $item->height }}</h4>
        @endforeach
    </ul>

</body>
</html>