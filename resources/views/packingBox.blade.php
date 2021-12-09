<!DOCTYPE html>
<html>
<head>
<title>Pack a Box</title>
</head>
<body>

<h1>Product Information</h1>

    @foreach($boxType as $item)
    <h1> Box Found: {{ $item->name }} <h1>
    @endforeach

</body>
</html>