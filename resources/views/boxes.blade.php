<!DOCTYPE html>
<html>
<head>
<title>Pack a Box</title>
</head>
<body>

    <h1>Box List</h1>

    <ul>
    @foreach($boxes as $item)
    <a href="/boxes/{{ $item->name }}"> <h4>{{ $item->name }} </h4> </a>
        <h4> {{ $item->length }}</h4>
        <h4> {{ $item->width }}</h4>
        <h4> {{ $item->height }}</h4>
        @endforeach
    </ul>

</body>
</html>