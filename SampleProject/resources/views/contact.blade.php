<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>presia/recruit</title>
    </head>
    <body>
    @if(isset($Person['name']))
        {{$Person}}

    @else
        <form method="POST">
            <table>
                @csrf
                <tr><th>name: </th><td><input type="text" name="name" value=""></td></tr>
                <tr><th>mail: </th><td><input type="text" name="mail" value=""></td></tr>
                <tr><th>tel: </th><td><input type="text" name="tel" value=""></td></tr>
                <tr><th>contents: </th><td><input type="text" name="content" value=""></td></tr>
                <tr><th></th><td><input type="submit" value="send"></td></tr>
            </table>

        </form>

    @endif
    </body>
</html>
