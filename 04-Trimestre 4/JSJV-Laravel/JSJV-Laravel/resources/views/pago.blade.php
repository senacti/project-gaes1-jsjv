<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>

    <link rel="stylesheet" href="{{ asset('css/Estilo.Pago.css') }}">



</head>

<body>
    
    <!--Titulo-->
    <h1 class="Titulo">Finalizar Compra</h1>

    <!--Factura-->
    <div class="formFac">
        
        <h1>Facturación</h1>

        <form action=" {{ url ('/Catalogo_Servicios_CR') }} " id="formulario" >

            <div class="Nombre">
            <!--Nombres-->
            <label for="text">Nombres</label>
            <input type="text" name="ingreseNombre" id="ingreseNombre"placeholder="Ingrese su Nombre" pattern="^[A-Za-z]+$" maxlength="30">
    
            <!--Apeliidos-->
            <label for="username">Apellidos</label>
            <input type="text"  name="Apellido" id="Apellido" placeholder="Ingrese su Apellido" pattern="^[A-Za-z]+$" maxlength="30" >
            </div>

            <!--Dirección-->
            <label for="text">Dirección</label>
            <input type="text" name="Dirección" id="Dirección"placeholder="*Dirección">

            <!--Barrio-->
            <label for="text">Barrio</label>
            <input type="text"name="Barrio" id="Barrio" placeholder="*Barrio">
    
            <!--Telefono-->
            <label for="number">Telefono</label>
            <input type="number" name="Telefono" id="Telefono" placeholder="Telefono" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
    
            <!--Email-->
            <label for="email">Correo Electronico</label>
            <input type="email"name="Correo" id="Correo" placeholder="Escriba un Correo">
    
            <!--Numero de Identificación-->
            <label for="number">N.Identificacion</label>
            <input type="number" name="Identificacion" id="Identificacion" placeholder="Numero Identificacion" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
            <!--Tipo Servcio-->
            <label for="tex">Tipo Servicio</Label>
            <select name="TipoServicio" id="TipoServicio" required>
                <option value="">Tipo Servicio</option>
                <option value="">Muebles</option>
                <option value="">Lavanderia</option>
                <option value="">Planchado</option>
                <option value="">Tintoreria</option>  
                <option value="">Zapatos</option>
                <option value="">Tapetes</option>
            </select>
            <br>
            <br>
            <!--Cantidad -->
            <label for="text">Cantidad</label>  
            <input type="number" name="Cantidad" id="Cantidad" placeholder="Cantidad Servicio" maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
    
             <!--Informacion Adicional-->
             <label for="tex">Información Adicional</label>  
             <input type="tex" placeholder="">
         
        </form>


    </div>

    <!--Pagos-->
    <div class="formPedid">

        <h1>Tu Pedido</h1>

        <div class="cuadro1">

            <!--Tabla-->
            <table>
                
                <tr>
                <th>Servicio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                </tr>

                <tr>
                    <td>Lavanderia</td>
                    <td>2</td>
                    <td>$60.000</td>
                </tr>

                <tr>
                    <td>Tintoreria</td>
                    <td>1</td>
                    <td>$30.000</td>
                </tr>

                <tr>
                    <td>Muebles</td>
                    <td>1</td>
                    <td>$80.000</td>
                </tr>

                <tr class="BordTotal">
                    <th>TOTAL</th>
                    <td></td>
                    <td>$170.000</td>
                </tr>

            </table>

        </div>

        <div class="cuadro2">

            <p>Metodo de Pago</p>
            
            <img class="img1" src="{{ asset('icon/mastercard.png') }}" alt="Mastercart">
            <img class="img2"src="{{ asset('icon/visa.png') }}" alt="Visa">
            <img class="img3"src="{{ asset('icon/money.png') }}" alt="Moneda">

            <div class="cuadro3">
                <br>

                <p>Dando click a esta opción nos estás confirmando que aceptas <br></p>
                <p> todos los términos y condiciones de Lavamatic. Información <br></p>
                <p> que encuentras en Nuestras Políticas y Preguntas Frecuentes.<br></p>


                <label for="text"> Acepto las condiciones*</label>
                <input type="checkbox" name="condiciones" checked="checked">

            </div>
            

        </div>
        
        <a href="{{ url('/Catalogo_Servicios_CR') }} "><button type="submit" form="formulario"  class="btn1">Enviar</button></a>
            
        </div>
        <!--<a href="Catalogo Servicios.html">
            <button type="submit" class="btn1">
         Pagar
        </button>
      <input type="submit"href="Catalogo Servicios.html"form="formulario" class="btn1"value="Pagar">-->

    </div>

</body>
<script src="{{ asset('js/pago.js') }}"></script>

</html>