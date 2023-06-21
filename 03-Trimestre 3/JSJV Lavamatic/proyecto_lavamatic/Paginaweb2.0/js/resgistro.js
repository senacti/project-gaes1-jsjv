document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
  
    let email = document.getElementById('correo').value;
    if (email.length < 10) {
      alert('El correo es invalido,"Example@correo.com"');
      return;
    }

  
   
    let usuario = document.getElementById('usuario').value;
    if (usuario.length < 6) {
      alert('El usuario debe ser mayor a 6 caracteres');
      return;
    }

    let contraseña = document.getElementById('contraseña').value;
    if (contraseña.length < 6) {
      alert('La contraseña debe ser mayor a 6 caracteres');
      return;
    }
    
    
    this.submit(validarFormulario);
     

  }
  
