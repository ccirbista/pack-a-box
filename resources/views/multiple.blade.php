<!DOCTYPE html>
<html>
<head>
<title>Packing Multiple Product in a Box</title>
</head>
<body>

    @foreach($boxType as $item)
        <ol>
           {{ $item }}

        </ol>
    @endforeach


</body>
</html>