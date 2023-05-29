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

    
    this.submit(validarFormulario);
     

  }