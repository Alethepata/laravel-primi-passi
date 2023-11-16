<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World !</title>
</head>
<body>
    <header>
        <div class="container">

            @foreach ($menu as $item)

                <li>
                  <a href={{$item['link']}}>{{$item['title']}}</a>
                </li>

            @endforeach

        </div>
    </header>

    <h1>About</h1>
</body>
</html>
