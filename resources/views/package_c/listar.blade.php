<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
                    <td>
                        <h4>id paquetes
                    </td>
                    <td>
                        <h4>codigo
                    </td>
                    <td>
                        <h4>descripcion
                    </td>
                    <td>
                        <h4>destinatario
                    </td>
                    <td>
                        <h4>Direccion
                    </td>


                    @foreach ($paquetes as $paq)
                        <tr>
                            <td>{{ $paq->id }}</td>
                            <td>{{ $paq->codigo }}</td>
                            <td>{{ $paq->descripcion }} </td>
                            <td>{{ $paq->destinatario }} </td>
                            <td>{{ $paq->direccion }} </td>
                            <td><a href="{{ route('package.show', $paq->id) }}"
                                    style="text-decoration: none">Mostrar</a></td>
                            <td><a href="{{ route('package.edit', $paq->id) }}" style="text-decoration: none">Editar</a></td>
                            <td>
                                <form action="{{ route('package.destroy', $paq->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
</body>
</html>