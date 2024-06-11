<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf {{-- token o seguridad  --}}
            <label  class="form-label">
                Codigo:
                <br>
                <input class="form-control" type="text" name="codigo"  class="form-control" required>
            </label>
            <br>
            <label  class="form-label">
                Descripcion:
                <br>
                <input class="form-control"  type="text" name="descripcion" required>
            </label>
            <br>
            <label  class="form-label">
                Destinatario:
                <br>
                <input class="form-control"  type="text" name="destinatario" required>
            </label>
            <br>
            <label  class="form-label">
                Direccion:
                <br>
                <input class="form-control"  type="text" name="direcciones" required>
            </label>
            <br><br>
            <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
        </form>
</body>
</html>