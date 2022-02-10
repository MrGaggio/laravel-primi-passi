<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>I contatti di riferimento sono i seguenti:</h1>
            <ul>
                @foreach ($contacts in $contact)
                    <li> {{ @contact }} </li>
                    @endforeach
            </ul>
    </main>
</body>
</html>