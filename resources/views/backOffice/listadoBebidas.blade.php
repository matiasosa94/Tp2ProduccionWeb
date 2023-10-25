<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
        <h3>Listado de Bebidas</h3>
        <a href="/backOffice/bebida/create" ><button class="btn btn-primary mb-3 mt-3"> Crear una bebida</button></a>
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
                        <a href="/backOffice/bebida/{{$producto->id}}/edit" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                        
                        <form action="/backOffice/bebida/{{$producto->id}}/eliminar" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                      </form>
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