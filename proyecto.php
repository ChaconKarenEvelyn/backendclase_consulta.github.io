<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="public12/css/main.css">
    <title>Proyecto-Backend</title>

    <script>
function eliminarProducto(id) {
  if (confirm("¿Está seguro que desea eliminar el producto?") == true) {
    window.location.href = "./eliminar_producto.php?id="+id;
  }
}
</script>





</head>


  <body>
    
    <section class="introduccion" id="introduccion-te">
      <h2 class="titulo">-LISTADO DE PRODUCTOS-</h2>
      <img class="icono" src="public12/imagenes/te-verde.png"> 
      </section>

      <section class="agregar">
      <a href="./agregar_producto.php" type="button" id="boton_agregar" class="btn btn-outline-danger"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
    </svg>AGREGAR</a>
      </section>

    <table class="table">
      <thead>
        <tr>
          <th scope="col" id="inicio">PRODUCTO</th>
          <th scope="col" id="inicio">DESCRIPCION</th>
          <th scope="col" id="inicio">STOCK</th>
          <th scope="col" id="inicio">PRECIO</th>
          <th scope="col" id="inicio">ACCIONES</th>
          </tr>
        </thead>
      <tbody class="table-group-divider">
          

    <?php

      $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

      $query = "SELECT * FROM productos";

      $resultado = mysqli_query($conexion, $query);

      while($unafila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
          echo "<td>". $unafila["nombre_producto"]."</th>";
          echo "<td>". $unafila["descripcion_producto"]."</td>";
          echo "<td>". $unafila["cantidad_producto"]."</td>";
          echo "<td>". $unafila["precio_producto"]."</td>";
          echo "<td> 
          
          <a class='edit' title='Edit' data-toggle='tooltip'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
        </svg>EDITAR</a>
          
          <a href='javascript:void(0);' onclick='eliminarProducto(".$unafila["id_producto"].")' class='delete' title='Delete' data-toggle='tooltip'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
          <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
          <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
        </svg>ELIMINAR</a>
    </td>";
      

        }

      mysqli_close($conexion);

    ?>


        </tbody>
      </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>











