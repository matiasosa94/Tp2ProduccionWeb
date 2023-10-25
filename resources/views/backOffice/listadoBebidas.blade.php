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
                <td>Precio</td>
                <td>Accion</td>
                </tr>
            </thead>
            @forelse ($productos as $producto)
            <tbody>
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <a href="*" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                        <a href="*" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                    </td>
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