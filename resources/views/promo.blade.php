<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hello World !</title>
</head>
<body>
    <header>
        <div class="container my-3">

            <ul class="list-unstyled d-flex">
                @foreach ($menu as $item)

                  <li>
                    <a class="text-decoration-none me-4" href={{$item['link']}}>{{$item['title']}}</a>
                  </li>

                @endforeach
            </ul>

        </div>
    </header>

    <div class="container">
        <div class="jumbotron text-center">
            <h1>Promo</h1>
            <p>Works in progress</p>
            <img src="https://static.wixstatic.com/media/215f08_7732a160d8d74d2389edbafc876d4236~mv2.gif" alt="">
        </div>
    </div>

</body>
</html>
