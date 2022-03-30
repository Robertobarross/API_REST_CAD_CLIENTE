<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo Api do GitHub</title>
</head>
<body>

    <div>

        @foreach ($apiArray as $api)

        <ul>
            <li>{{ $apiArray['name'] }}</li>
            <li>{{ $apiArray['bio'] }}</li>
            <li>{{ $apiArray['followers'] }}</li>
            <li>{{ $apiArray['following'] }}</li>
        </ul>

        @endforeach

    </div>

</body>
</html>
