<!DOCTYPE html>
<html>
<head>
<title>Pack a Box</title>
</head>
<body>

<h1>Product Information</h1>

    <h4>{{ $product->name }} </h4>
    <h4> {{ $product->length }}</h4>
    <h4> {{ $product->width }}</h4>
    <h4> {{ $product->height }}</h4>
    <a href="/products/{{ $product->name}}/findBox"><h1> Find a Box for this product <h1></a>

</body>
</html>