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
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Estilos_Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Estilo.Tabla.css') }}">

    <!--  JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>
<body>

    <header class="menu">
        <div class="cuadrolog">
            <a href=" {{ url ('/Dashboard') }}"><img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo"> </a>
            </div>
           
            <nav>
                <a href=""></a>

            </nav>

        
           </div>
           <div class="menuadmin">
            <button>Santiago Godoy</button>
            <img class="fotoad" src="{{ asset('img/Administrador.jpg') }}" alt="fotoad">
            <div class="menuadminl">
            <a href="#">Informacion de empleados</a>
            <a href="#">Informacion personal</a>
            <a href=" {{ url('Index') }}">Cerrar sesion</a>
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
                <span ><a href=" {{ url ('/DashBoard_Ot') }}">Orden de trabajo</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-user"></a></i>
                <span ><a href=" {{ url('/Dashboard_GE') }}">Empleado</a></span>
                
            </div>

            <div class="enlace" >
                <i class="bx bx-grid-alt" ></i>
                <span ><a href=" {{ url('/Dashboard_GA') }}">Actividades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span ><a href=" {{ url ('/Error404') }}">Mensajes</a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span ><a href=" {{ url('/Error500') }}">Novedades</a></span>
                
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span ><a href=" {{ url ('/Dashboard_Inv') }}">Inventarios</a></span>
            </div>

            <!--div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div-->

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span ><a href=" {{ url ('/Error404') }}">Configuracion</a></span>
            </div>
        </div>
    </div>
    
    <div class="barra de navegacion">
    </div>

        <!--Formulario-->            
        <h1>Registro Inventarios </h1>
        <div class="cont">

               <form id="form" class="form" action=" {{ url ('/Dashboar') }}"> 
                   <div class="form_control" action="">
                   <fieldset >
                       <legend>Tipo Inventarios</legend>
                       <select class="placeholder" name="Tipo ID" required>
                           <option value="Tipo id" >Seleccione Tipo inventario</option>
                           <option value="Tipo id">Maquinas</option>
                           <option value="Tipo id">insumos</option>

                           
                       </select>
                       <input class="placeholder" type="text" placeholder="Descripcion Inventario" maxlength="30" required>

                   </fieldset>
               </div>
    
               <div class="form_control" action="">
                   <fieldset >
                       <legend>Datos para el almacenamiento</legend>
                       <input class="placeholder" type="text" placeholder=" Color " maxlength="15" required>
                       <input class="placeholder" type="text" placeholder=" Marca " maxlength="15" required>
                       <input class="placeholder" type="text" placeholder=" Tamaño " maxlength="15" required>

                   </fieldset>
               </div>
    
               <!--div class="form_control" action="">
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
                       <input class="placeholder" type="number" placeholder="Numero" required>
                       <input class="placeholder" type="text" placeholder="Barrio" required>
                       <input class="placeholder" type="text" placeholder="Localidad" required>
                   </fieldset>
               </div-->
    
               <div class="form_control" action="">
                   <fieldset>
                       <legend> Detalles para el almacenamiento </legend>
                       <input class="placeholder" type="text" placeholder=" Nombre Inventario " required>
                       <input class="placeholder" type="text" placeholder="Detalle  " required>
                       <!--input class="placeholder" type="email" placeholder=" Correo electronico" required-->
                   </fieldset>
               </div>
    
               <!--div class="form_control" action="">
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
                   </div-->
    
                   <input class="btn" type="submit" value="Enviar">
                   <input class="btn2" type="reset" value="Limpiar">   
               </form>
            
                <!--<input class="btn" type="submit" value="Enviar">
                <input class="btn2" type="reset" value="Limpiar"-->   
    
           </div>

    <div class="cuadro">

    <!--Tablas-->
    <div class="tabla1">
        <p>Insumos</p>
    <table>
                
        <tr>
        <th>Tipo de inventario</th>
        <th>Nombre</th>
        <th>Id Inventario</th>
        </tr>
    
        <tr>
            <td>Maquina</td>
            <td>Lavadora Samsung</td>
            <td>0001</td>
        </tr>
    
        <tr>
            <td>Insumo</td>
            <td>Detergente AJAX</td>
            <td>0002</td>
        </tr>
    
        <tr>
            <td>Maquina</td>
            <td>Secadora Lg</td>
            <td>0003</td>
        </tr>

        <tr>
            <td>Insumo</td>
            <td>Cloro Blancox</td>
            <td>0004</td>
        </tr>
    
        <tr class>
            <td colspan="2">TOTAL  Registros Inventarios</td>
            <td>4</td>
        </tr>
    
    </table>
    </div>

   

    </div>

</body>
</html>