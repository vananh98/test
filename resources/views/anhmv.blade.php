<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <form action="">
            @csrf
            <input type="text" name="_token" value="{{csrf_token()}}" hidden>
            <input type="text"><br>
            <input type="text">
            <input type="submit">
        </form>
    </table>
</body>

</html>