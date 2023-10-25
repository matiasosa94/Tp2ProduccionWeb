<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
       <h1>Creacion Tipo bebida</h1>
       <form action="/backOffice/tipo" method="post">
        @csrf
        <label for="tipo">Tipo bebida</label>
        <input type="text" id="tipo" name="tipo" class="form-control">
        <button type="submit" class="btn btn-primary mt-3"> Crear</button>
       </form>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>