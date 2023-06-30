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
            <a href=" {{ url('/Dashboard') }}"><img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo"></a>
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
            <a href=" {{ url('/Index') }}">Cerrar sesion</a>
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
                <span ><a href=" {{ url('/DashBoard_Ot') }}">Orden de trabajo</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-user"></a></i>
                <span ><a href=" {{ url ('/Dashboard_GE') }}">Empleado</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-grid-alt" ></i>
                <span ><a href=" {{ url ('Dashboard_GA') }}">Actividades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span ><a href=" {{ url('/Error404') }}">Mensajes</a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span ><a href=" {{ url('/Error500') }}">Novedades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span ><a href=" {{ url ('/Dashboard_Inv') }}">Inventarios</a></span>
            </div>

            
            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span ><a href=" {{ url('/Error404') }}">Configuracion</a></span>
            </div>
        </div>
    </div>

    <div class="barra de navegacion">
    </div>

        <!--Formulario-->
        <h1>Novedad Actividad</h1>
        <div class="cont">

               <form id="form" class="form" action="{{url('/Dashboard')}}">
                   <div class="form_control" action="">
                   <fieldset >
                       <legend>Activdad de novedad</legend>
                       <select class="placeholder" name="Tipo servicio" required>
                           <option value="Tipo id" >Seleccione </option>
                           <option value="Tipo id">Plnachado</option>
                           <option value="Tipo id">Lavado</option>
                           <option value="Tipo id">Lavado muebles</option>
                           <option value="Tipo id">Tinturado</option>

                       </select>
                       <select class="placeholder" name="Tipo Novedad" required>
                           <option value="Tipo id" >Seleccione </option>
                           <option value="Tipo id">Roto</option>
                           <option value="Tipo id">Quemado</option>
                           <option value="Tipo id">Color tintura incorrecto</option>
                           <option value="Tipo id">Manchas</option>
                           <option value="Tipo id">Otro...</option>

                       </select>
                       <!--input class="placeholder" type="number" placeholder="Numero de identificacion" required-->
                   </fieldset>
               </div>

               <div class="form_control" action="">
                   <fieldset >
                       <legend>Nombres Empleado</legend>
                       <input class="placeholder" type="text" placeholder=" Primer nombre " pattern="^[A-Za-z]+$" maxlength="15" required>
                       <input class="placeholder" type="text" placeholder="Segundo nombre " pattern="^[A-Za-z]+$" maxlength="15" required>
                       <input class="placeholder" type="text" placeholder=" Primer apellido" pattern="^[A-Za-z]+$" maxlength="15"required>
                       <input class="placeholder" type="text" placeholder="Segundo apellido" pattern="^[A-Za-z]+$" maxlength="15" required>
                   </fieldset>
               </div>


                   <div class="form_control" action="">
                    <fieldset>
                    <legend> Descripcion Novedad</legend>
                    <input type="text" maxlength="30" placeholder="Descripcion" >
                </fieldset>
                   </div>
                   <div class="form_control" action="">
                    <fieldset>
                    <legend> Id Orden de Trabajo</legend>
                    <input type="number" placeholder="Id Ot" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                </fieldset>
                   </div>


                   <input class="btn" type="submit" value="Asignar">
                   <input class="btn2" type="reset" value="Limpiar">
               </form>



           </div>

    <div class="cuadro">

    <!--Tablas-->
    <div class="tabla1">
        <p>Servcios Registrados</p>
    <table>

        <tr>
        <th>Tipo de Servicio</th>
        <th>Cantidad</th>
        <th>Id Ot</th>
        </tr>

        <tr>
            <td>Lavanderia: Chaqueta</td>
            <td>2</td>
            <td>001</td>
        </tr>

        <tr>
            <td>Tintoreria: Pantalon</td>
            <td>1</td>
            <td>002</td>
        </tr>

        <tr>
            <td>Muebles: Sofa</td>
            <td>1</td>
            <td>003</td>
        </tr>

        <tr>
            <td>Muebles: Sillon</td>
            <td>1</td>
            <td>004</td>
        </tr>



    </table>
    </div>



    </div>

</body>
</html>
