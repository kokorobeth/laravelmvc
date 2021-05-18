<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Blade Laravel</title>
</head>
<body>
    <form action="/sapa" method="POST">
    @csrf
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
    </form>
</body>
</html>