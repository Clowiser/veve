<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('titre')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <main>
            <div>
                <div>
                    @yield('contenu')
                </div>
            </div>
        </main>
    </div>
</body>
</html>