<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li class="text-red-900 bg-red-300 w-1/2 text-lg">{{$error}}</li>
        @endforeach
    @endif
    <form action="profile" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" id="">
        <input type="submit" value="Env">
    </form>
</body>

</html>