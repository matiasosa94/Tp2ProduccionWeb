<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
       <h1>Creacion Marca</h1>
       <form action="/backOffice/marca" method="post">
        @csrf
        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" class="form-control">
        <button type="submit" class="btn btn-primary mt-3"> Crear</button>
       </form>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>