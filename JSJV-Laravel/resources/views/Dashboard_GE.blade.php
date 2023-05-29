<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--  CSS -->
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="css/Estilos_Form.css">
    <link rel="stylesheet" href="css/Estilo.Tabla.css">

    <!--  JS -->
    <script src="./js/app.js" defer></script>
    
</head>
<body>

    <header class="menu">
        <div class="cuadrolog">
            <a href="Dashboard.html"><img class="logo" src="img/Lavamatic La Italiana logo.jpeg" alt="logo"></a>
            </div>
           
            <nav>
                <a href=""></a>

            </nav>

        
           </div>
           <div class="menuadmin">
            <button>Santiago Godoy</button>
            <img class="fotoad" src="img/Administrador.jpg" alt="fotoad">
            <div class="menuadminl">
            <a href="#">Informacion de empleados</a>
            <a href="#">Informacion personal</a>
            <a href="Index.html">Cerrar sesion</a>
            </div>
          </div>             
    </header>
    

    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span ><a href="DashBoard_Ot.html">Orden de trabajo</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-user"></a></i>
                <span ><a href="Dashboard_GE.html">Empleado</a></span>
                
            </div>

            <div class="enlace" >
                <i class="bx bx-grid-alt" ></i>
                <span ><a href="Dashboard_GA.html">Actividades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span ><a href="Error404.html">Mensajes</a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span ><a href="Error500.html">Novedades</a></span>
                
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span ><a href="Dashboard_Inv.html">Inventarios</a></span>
            </div>

            <!--div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div-->

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span ><a href="Error404.html">Configuracion</a></span>
            </div>
        </div>
    </div>
    
    <div class="barra de navegacion">
    </div>

        <!--Formulario-->            
        <h1>Registro del Empleado</h1>
        <div class="cont2">

               <form id="formulario" class="form" action="Dashboard.html"> 
                   <div class="form_control" action="">
                   <fieldset >
                       <legend>Documento Empleado</legend>
                       <select class="placeholder" name="Tipo ID" required>
                           <option value="Tipo id" >Seleccione Tipo Identficacion</option>
                           <option value="Tipo id">TI-Tarjeta Identidad</option>
                           <option value="Tipo id">CC-Cedula de Ciudadania</option>
                           <option value="Tipo id">CE-Cedula de Extrangeria</option>
                           <option value="Tipo id">PA-Pasaporte</option>
                           <option value="Tipo id">PPT- Permiso por proteccion temporal</option>
                           <option value="Tipo id">PEP- Permiso especial de permanencia</option>
                       </select>
                       <input type="number" placeholder="Numero identificacion" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                   </fieldset>
               </div>
    
               <div class="form_control" action="">
                   <fieldset >
                       <legend>Nombres Empleado</legend>
                       <input class="placeholder" type="text" placeholder=" Primer nombre "pattern="^[A-Za-z]+$" maxlength="15" required>
                       <input class="placeholder" type="text" placeholder="Segundo nombre "pattern="^[A-Za-z]+$" maxlength="15" required>
                       <input class="placeholder" type="text" placeholder=" Primer apellido"pattern="^[A-Za-z]+$" maxlength="15" required>
                       <input class="placeholder" type="text" placeholder="Segundo apellido"pattern="^[A-Za-z]+$" maxlength="15" required>
                   </fieldset>
               </div>
    
               <div class="form_control" action="">
                   <fieldset>
                       <Legend> Direccion </Legend>
                       <select class="placeholder" name="Direccion">
                           <option value="Tipo">...</option>
                           <option value="Calle">Calle</option>
                           <option value="Carrera">Carrera</option>
                           <option value="Diagonal">Diagonal</option>
                           <option value="Transversal">Transversal</option>
                           <option value="Autopista">Autopista</option>
                           <option value="Avenida">Avenida</option>
                       </select>
                       <input class="placeholder" type="text" placeholder="Via principal" required>
                       <input class="placeholder" type="text" placeholder="Complemento"required >
                       <label for="">-</label>
                       <input type="placeholder"  type="number" placeholder="Numero" required maxlength="10">
                       <input class="placeholder" type="text" placeholder="Barrio" required>
                       <input class="placeholder" type="text" placeholder="Localidad" required>
                   </fieldset>
               </div>
    
               <div class="form_control" action="">
                   <fieldset>
                       <legend> Datos de Contacto </legend>
                       <input type="number" placeholder="Telefono" maxlength="7" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                       <input type="number" placeholder="Celular" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                       <input class="placeholder" type="email" placeholder=" Correo electronico" name="correo" id="correo" required>
                   </fieldset>
               </div>
    
               <div class="form_control" action="">
                   <fieldset>
                       <legend> Datos adicionales</legend>
                       <label > Fecha de nacimiento </label>
                       <input class="placeholder" type="date" >
                       <label> RH </label>
                       <select class="placeholder" name="RH">
                           <option value="RH">...</option>
                           <option value="RH">O</option>
                           <option value="RH">A</option>
                           <option value="RH">B</option>
                           <option value="RH">AB</option>
                       </select>
                       <select class="placeholder" name="Rh">
                           <option value="Rh">...</option>
                           <option value="Rh">+</option>
                           <option value="Rh">-</option>
                       </select>
                       <label> Genero </label>
                       <select class="placeholder" name="Genero">
                           <option value="Genero">...</option>
                           <option value="Genero">Masculino</option>
                           <option value="Genero">Femenino</option>
                           <option value="Genero">No binario</option>
                       </select>
                       <label> Estado Civil</label>
                           <select class="placeholder" name="Estado Civil">
                               <option value="Estado civil">...</option>
                               <option value="Estado civil"> Soltero/a </option>
                               <option value="Estado Civil"> Casado/a </option>
                               <option value="Estado Civil">Union libre</option>
                               <option value="Estado Civil">Separado/a</option>
                             <option value="Estado Civil">Viudo/a</option>
                           </select>
                       </fieldset>
                   </div>
    
                   <input class="btn" type="submit" value="Enviar">
                   <input class="btn2" type="reset" value="Limpiar">   
               </form>
            
                <!--<input class="btn" type="submit" value="Enviar">
                <input class="btn2" type="reset" value="Limpiar"-->   
    
           </div>

    <div class="cuadro2">

    <!--Tablas-->
    <div class="tabla1">
        <p>Empleados</p>
    <table>
                
        <tr>
        <th>Nombre Empleado</th>
        <th>Numero telefono</th>
        <th>Numero Id</th>
        </tr>
    
        <tr>
            <td>Santiago Millan</td>
            <td>3212199775</td>
            <td>1000365288</td>
        </tr>
    
        <tr>
            <td>Jaider Aponte</td>
            <td>321689298</td>
            <td>1000294831</td>
        </tr>
    
        <tr>
            <td>Santiago Godoy</td>
            <td>3019760954</td>
            <td>1001456231</td>
        </tr>

        <tr>
            <td>Valentina Sanchez</td>
            <td>341523132</td>
            <td>1000765342</td>
        </tr>
    
        <tr class>
            <td colspan="2">TOTAL Empleados Registrados</td>
            <td>3</td>
        </tr>
    
    </table>
    </div>

    <!--div class="tabla2">
    <table>
        <p>Datos Cliente</p>      
        <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Documento</th>
        <th>Telefono</th>
        <th>Dirección</th>
        </tr>
    
        <tr>
            <td>Santiago Julian</td>
            <td>Millan</td>
            <td>100846477</td>
            <td>1175539183</td>
            <td>Calle 44 Sur #72C</td>
        </tr>
    
    </table>
    </div-->

    </div>

</body>
<script src="js/resgistro.js"></script>
</html>