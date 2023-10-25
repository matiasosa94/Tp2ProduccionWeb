<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
       <h1>Creacion Producto</h1>
       <form action="/backOffice/bebida" method="post">
        @csrf

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>

        <div>
            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" class="form-control">
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" class="form-control">
        </div>

        <div>
            <label for="marca">Marca</label>
            <select name="marca" id="marca" class="form-select" id="marca">
                <option selected disabled readonly>Choose...</option>
                @foreach ($marcas as $marca)
                <option value="{{$marca['id']}}">{{$marca['marca']}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tipo">Tipo Bebida</label>
            <select name="tipo" id="tipo" class="form-select" id="marca">
                <option selected disabled readonly>Choose...</option>
                @foreach ($tipos as $tipo)
                <option value="{{$tipo['id']}}">{{$tipo['tipo']}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text-area" id="descripcion" name="descripcion" class="form-control">
        </div>

        <div>
            <label for="imagen">Imagen</label>
            <input type="text" id="imagen" name="imagen" class="form-control">
        </div>





        <button type="submit" class="btn btn-primary mt-3"> Crear</button>
       </form>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>