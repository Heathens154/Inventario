<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventarios</title>
    <!--Vinculación con estilos .css-->
    <link rel="stylesheet" href="/static/css/styles.css">
</head>
<body>
    <!--Seccion de encabezado del sitio--> 
    <header>
        <!--Contenedor del logo y título del inventario-->
        <div class="logo">
            <h1>Sistema de Inventarios Corporación IMGC </h1>
        </div>
        <nav>
            <ul>
        <!--Enlaces principales del inventario con las diferentes opciones que proporcionará el inventario
        se agregan dos botones "inicio se sesión" y "registrarse" para el tipo de vista que tendra el 
        usuario principal que podrá hacer cambios, cargar contenido nuevo y modificar el existente-->
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#secciones de almacen">Secciones de Almacén</a></li>
                <li><a href="#agregar-producto">Agregar Producto</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="#estatus">Estatus</a></li>
                <li><a herf="informacion">Informacion de contacto</a></li>
                <li><button onclick="location.href='login.html'">Inicio de Sesión</button></li>
                <li><button onclick="location.href='register.html'">Registrarse</button></li>
            </ul>
        </nav>
    </header>
<!--Contenido principal del inventario-->
    <main>
        <section id="inicio">
            <h2>Inicio</h2>
        </section>
<!--Mensaje de bienvenida al usuario-->
        <section>
            <h2>Bienvenido a inventarios IMGC</h2>
            <p>Una herramienta dedicada a la optimización.</p>
            <p> Aquí puedes consultar, gestionar y registrar los productos de manera rápida y eficiente.</p>
        </section>
    </main>
<!--Identificación de las diferentes secciones del almacen pertenecientes a las distintas empresas 
 que conforman la corporación-->    
    <main>   
        <section id="secciones de almacen">
            <h2>Secciones de Almacén</h2>
            <div class="card">
                <h3>IMGC Iron</h3>
                <p>Iron Metallics Global Consultans</p>
            </div>
            <div class="card">
                <h3>IMGC Group</h3>
                <p>Agencia Naviera</p>
            </div>
            <div class="card">
                <h3>Hierros Unidos</h3>
                <p>Unidad de Negocios</p>
            </div>
            <div class="card">
                <h3>Alas del Sur</h3>
                <p>Sector Aeronáutico</p>
            </div>
            <div class="card">
                 <h3>IMGC Internacional</h3>
                 <p>Exportación</p>
            </div>
            <div class="card">
                <h3>Inversiones 286</h3>
                <p>Remolcadores Navieros</p>
            </div>
            <div class="card">
                <h3>Sao</h3>
                <p>Servicios Ambientales del Orinoco</p>
            </div>
            <div class="card">
                <h3>Puerto Orinoco</h3>
                <p>Turismo</p>
            </div>

        </section>
    </main>
    <main>
<!--Panel principal para agregar un producto específico para una seccion en particular-->
        <section id="agregar-producto">
            <h2>Agregar Producto</h2>
            <form>
                <label for="fecha">Fecha</label>
                <input type="int" id="fecha" name="fecha" required>

                <label for="nombre">Producto:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" required>
                
                <label for="unidad">Unidad de Medida:</label>
                <input type="text" id="unidad" name="unidad" required>

                <label for="seccion de almacen">Ubicación (sección de almacén):</label>
                <input type="text" id="seccion" name="seccion" required>
                
                <label for="codigo">Código del Producto:</label>
                <input type="text" id="codigo" name="codigo" required>

                <label for="clase">Clase:</label>
                <input type="text" id="clase" name="clase" required>

                <label for="proveedor">Proveedor:</label>
                <input type="text" id="proveedor" name="proveedor" required>
                
                <label for="observacion">Observacion:</label>
                <input type="text" id="observacion" name="observacion" required>
                
                <button type="submit">Agregar</button>
            </form>
        </section>

         <!--Vista previa del producto que deseamos consultar en el inventario-->       
         <section id="estatus">
            <h2>Estatus</h2>
            <p>Lista de productos de inventario:</p>
            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Unidad de Medida</th>
                        <th>Ubicación</th>
                        <th>Código</th>
                        <th>Clase</th>
                        <th>Proveedor</th>
                        <th>Observacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
</body>
</html>
<!--
        <section id="contacto">
            <h2>Contacto</h2>
            <p>Complete el siguiente formulario con los datos del proveedor</p>
        <section>
            <h1>Datos de Emisor (Solo para entrega)</h1>
            <form>
                <label for="nombre-contacto">Nombre y Apellido:</label>
                <input type="text" id="nombre-contacto" name="nombre-contacto" required>

                <label for="cedula">Cédula:</label>
                <input type="number" id="cedula" name="cedula" required>

                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>
                
                <label for="email-contacto">Email:</label>
                <input type="email" id="email-contacto" name="email-contacto" required>
                
                <label for="telefono-contacto">Teléfono:</label>
                <input type="email" id="telefono-contacto" name="telefono-contacto" required>
                

                <label for="comentarios">Comentarios:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                
                <button type="submit">Agregar</button>
            </form>
        </section>

        <section id="informacion">
            <h1>Emisor</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre y Apellido</th>
                        <th>Cédula</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Comentarios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="Datos del proveedor">
             <h1>Datos del Proveedor (Solo para recepción)</h1>
             <form>
                  <label for="nombre-empresa">Nombre de la empresa:</label>
                  <input type="text" id="nombre-empresa" name="nombre-empresa" required>

                  <label for="numero-factura">Número de factura/nota de entrega:</label>
                  <input type="text" id="numero-factura" name="numero-factura" required>

                  <label for="datos">Datos de quien entrega (nombre/cédula):</label>
                  <input type="text" id="datos" name="datos" required>

                  <button type="submit">Agregar</button>
             </form>
        </section>
        <section id="informacion">
            <h1>Proveedor</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre de la empresa</th>
                        <th>Número de factura/nota de entrega</th>
                        <th>Datos de quien entrega</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h1>Datos del Transporte (Solo para entrega de materiales)</h1>
            <form>
                <label for="nombre">Nombre del transportista:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="vehiculo">Tipo de vehículo:</label>
                <input type="text" id="vehiculo" name="vehiculo" required> 

                <label for="datos">Datos de quien entrega (nombre/cédula):</label>
                <input type="text" id="datos" name="datos" required>

                <label for="placa">Placa:</label>
                <input type="number" id="placa" name="placa" required>

                <button type="submit">Agregar</button>
            </form>
        </section>

        <section id="informacion">
            <h1>Transporte</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre del transportista</th>
                        <th>Tipo de vehiculo</th>
                        <th>Datos de quien entrega</th>
                        <th>Placa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h1>Datos del Receptor</h1>
            <form>
                <label for="nombre">Nombre y Apellido:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="cedula">Cédula:</label>
                <input type="number" id="cedula" name="cedula" required>

                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>

                <label for="detalles">Detalles de la recepción ó Entrega de materiales, insumos y/o componentes:</label>
                <textarea type="text" id="detalles" name="detalles" required></textarea>

                <button type="submit">Agregar</button>
            </form>
        </section>

         <section id="informacion">
            <h1>Receptor</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre y Apellido</th>
                        <th>Cédula</th>
                        <th>Cargo</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>

            
 
    </main>

    <footer>
        <p>&copy; Maquetación módulo 1 - 2024.</p>
    </footer>
</body>
</html> --->
<?php /**PATH C:\xampp\htdocs\inventario\resources\views/index.blade.php ENDPATH**/ ?>