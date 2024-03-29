<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage Laravel</title>
</head>

<body>
    <header class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled d-flex">
                        <li class="px-3"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="px-3"><a href="{{ route('students') }}">Studenti</a></li>
                        <li class="px-3"><a href="{{ route('tutor') }}">Tutor</a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <h1> Laravel classe 113</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Insegnante:</h3>
                <h5>{{ $teachers }}</h5>
            </div>
        </div>
    </div>
</body>

</html>
