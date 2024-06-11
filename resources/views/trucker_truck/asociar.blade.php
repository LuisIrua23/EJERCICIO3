<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('trucker_truck.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h3>Camionero :</h3>
                    <select class="container-sm col-6" name="trucker_id">   {{-- importante --}}  
                        @foreach ($truckers as $cust)
                            <option  value="{{ $cust->id }}">{{ $cust->id }} - {{ $cust->nombre}}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <br>
                    <h3>camion:</h3>
                    <select class="container-sm col-6" name="truck_id">
                        @foreach ($trucks as $prod)
                            <option  value="{{ $prod->id }}">{{ $prod->id }} - {{ $prod->tipo }}</option>
                        @endforeach
                    </select>
                    <br> <br>
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
                </form>
</body>
</html>