<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table box-3">
                    <td>
                        <h4>Id
                    </td>
                    <td>
                        <h4>Camionero
                    </td>
                    <td>
                        <h4>CAmion
                    </td>
                    <td>
                        <h4>
                    </td>
                    <td>
                        <h4>
                    </td>
                    
                    <td></td>
                    <td></td>
                    @foreach ($truckers as $dat)
                        {{-- function listar --}}
                        <tr>
                            
                            <td class="box-3">{{ $dat->id }}</td>
                            {{-- <td>{{ $dato->codigo }}</td> --}}
                            {{-- <td>{{ $dato-> }}</td> --}}
                            <td>{{ $dat->trucker_id}}</td>
                            {{-- <td>{{$dato->nombre_profesor}}</td> --}}
                            <td>{{ $dat->truck_id }}</td>
                            {{-- <td><a class="btn btn-primary" href="{{ route('module.show', $dato->id) }}" style="text-decoration: none">Mostrar</a></td>
                            <td><a class="btn btn-primary" href="{{ route('module.edit', $dato->id) }}" style="text-decoration: none">Editar</a></td> --}}
                            <td>
                                {{-- <form action="{{ route('module.destroy', $dato->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
</body>
</html>