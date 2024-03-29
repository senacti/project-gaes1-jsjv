<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/Estilos_Form.css') }}">
    </head>
    <body>
        <hr>
        <div class="cont">
         <h1>Registro del Empleado</h1>
            <form id="form" class="form" action=" {{ url('/Dashboar')}}"> 
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
                    <input class="placeholder" type="number" placeholder="Numero de identificacion" required>
                </fieldset>
            </div>

            <div class="form_control" action="">
                <fieldset >
                    <legend>Nombres Empleado</legend>
                    <input class="placeholder" type="text" placeholder=" Primer nombre " required>
                    <input class="placeholder" type="text" placeholder="Segundo nombre " required>
                    <input class="placeholder" type="text" placeholder=" Primer apellido" required>
                    <input class="placeholder" type="text" placeholder="Segundo apellido" required>
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
                    <input class="placeholder" type="number" placeholder="Numero" required>
                    <input class="placeholder" type="text" placeholder="Barrio" required>
                    <input class="placeholder" type="text" placeholder="Localidad" required>
                </fieldset>
            </div>

            <div class="form_control" action="">
                <fieldset>
                    <legend> Datos de Contacto </legend>
                    <input class="placeholder" type="number" placeholder=" Telefono " required>
                    <input class="placeholder" type="number" placeholder=" Celular" required>
                    <input class="placeholder" type="email" placeholder=" Correo electronico" required>
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
        </div>
        <script src=" {{ asset('js/Form.js') }}"></script>
    </body>
</html>