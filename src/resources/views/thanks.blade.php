<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="thanks">
    <form class="" action="/" method="get">
        @csrf
        <h3 class="thanks__text">お問い合わせありがとうございました</h3>
        <div>
            <button class="thanks__box" type="submit">HOME</button>
        </div>
    </form>
    </div>
</body>
</html>