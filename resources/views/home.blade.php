<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Marca</td>
                    <td>Tipo</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Imagen</td> 
                </tr>
            </thead>
            @forelse ($productos as $producto)
            <tbody>
                <tr>
                    
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->marca->marca}}</td>
                    <td>{{$producto->tipo->tipo}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$producto->precio}}</td>
                    <td><img width="80px" height="80px" src="{{$producto->imagen}}" alt="imagen de {{$producto->nombre}}"></td>
                    <td><a href="/bebidasWeb/{{$producto->id}}"><button class="btn btn-primary">Ver producto</button></a></td>
                    @empty
                        <td class="text-center">¿Quien... se ha tomado todo el vino?</td>
                    @endforelse
                    
                </tr>
            </tbody>
        </table>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>