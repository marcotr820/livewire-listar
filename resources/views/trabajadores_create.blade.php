<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger p-1" role="alert">
                <ul class="text-danger m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('trabajador.store') }}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control border-dark" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control border-dark" name="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input class="form-control border-dark" name="telefono">
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input class="form-control border-dark" name="ciudad">
            </div>
            <div class="mb-3">
                <label class="form-label">Pais</label>
                <input class="form-control border-dark" name="pais" disabled>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" type="button">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
