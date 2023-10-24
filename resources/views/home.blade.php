<!DOCTYPE html>
<html lang="en">
@include('partials/head')
<body>
    @include('partials/header')
<main class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <td>nombre</td>
            <td>marca</td>
            <td>cantidad</td>
            <td>precio</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->marca}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->precio}}</td>
            </tr>
        </tbody>
    </table>
</main>
@include('partials/footer')
    @include('partials/scripts')
</body>
</html>