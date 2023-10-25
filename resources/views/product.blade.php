<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
        <table class="table table-striped table-bordered">
            @if ($producto)
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
            <tbody>
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->marca_id}}</td>
                    <td>{{$producto->tipo_id}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->imagen}}</td>
                    @else
                        <td class="text-center">ha ocurrido un error, no se puede mostrar el producto solicitado</td>
                    @endif
                </tr>
            </tbody>
        </table>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>