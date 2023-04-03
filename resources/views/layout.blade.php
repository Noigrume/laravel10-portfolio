<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body class="container">
    <section class="sidebar">
        @include('_partials.layout.navbar', [
            'appName' => 'portfolio'
        ])
               @yield('content')

    </section>


    <section class="current-page">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse est ipsam a sequi,
        dignissimos explicabo illo ullam vitae qui dolor,
        eum molestiae provident aspernatur sit tenetur unde quasi aut sed!
    </section>
</body>
</html>
