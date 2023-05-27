document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    let nombre = document.getElementById('ingreseNombre').value;
    if(nombre.length == 0) {
      alert('Ingresa Tu Nombre');
      return;
    }
    let Apellido = document.getElementById('Apellido').value;
    if(Apellido.length == 0) {
      alert('Ingresa Tu Apellido');
      return;
    }
    let direccion = document.getElementById('Dirección').value;
    if(direccion.length == 0) {
      alert('Ingresa Tu Direccion');
      return;
    }
    let Barrio = document.getElementById('Barrio').value;
    if(Barrio.length == 0) {
      alert('Ingresa Tu Barrio');
      return;
    }
    let telefono = document.getElementById('Telefono').value;
    if(telefono.length == 0) {
      alert('Ingresa Tu Telefono (Numero celular)');
      return;
    }
    let correo = document.getElementById('Correo').value;
    if(correo.length == 0) {
      alert('Ingresa Tu Correo');
      return;
    }
    let Identificacion = document.getElementById('Identificacion').value;
    if(Identificacion.length == 0) {
      alert('Ingresa Tu Numero de Identificacion');
      return;
    }
    /*let TipoServicio = document.getElementById('TipoServicio').value;
    if(TipoServicio.length == 0) {
      alert('Elige un tipo de servicio');
      return;
    }*/
    let cantidad = document.getElementById('Cantidad').value;
    if(cantidad.length == 0) {
    alert('Elige la cantidad del servicio');
    return;
  }
    let email = document.getElementById('Correo').value;
    if (email.length < 10) {
    alert('El correo es invalido,"Example@correo.com"');
    return;
  }

this.submit(validarFormulario);
 
}
