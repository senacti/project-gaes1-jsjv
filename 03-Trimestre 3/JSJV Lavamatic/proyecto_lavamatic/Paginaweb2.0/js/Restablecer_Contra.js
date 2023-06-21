document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
  
    let contraseña = document.getElementById('contraseña').value;
    if (contraseña.length < 6) {
      alert('La contraseña debe ser mayor a 6 caracteres');
      return;
    }

    
    let contraseña2 = document.getElementById('contraseña2').value;
    if (contraseña !== contraseña2) {
      alert('Las contraseñas no coinciden');
      return;
    } 
    if (contraseña === contraseña2){
        alert('La contraseña fue restablecida');
    }

    
    this.submit(validarFormulario);
     

  }