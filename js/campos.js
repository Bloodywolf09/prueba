var nombre = document.getElementById('nombre');
var telefono = document.getElementById('telefono');
var email = document.getElementById('email');
var descripcion = document.getElementById('descripcion');
var hojavida = document.getElementById('hojavida');
var titulon = document.getElementById('titulon');
var tituloEmpresa = document.getElementById('tituloEmpresa');
var titulot = document.getElementById('titulot');

var nombrePer = document.getElementById('nombrePer');
var nombrePersona = document.getElementById('nombrePersona');

var tituloem = document.getElementById('tituloem');

var telefonoContacto = document.getElementById('telefonoContacto');
var telefonoContac = document.getElementById('telefonoContac');

var titulodes = document.getElementById('titulodes');

var emailEmp = document.getElementById('emailEmp');
var emailEmpresa = document.getElementById('emailEmpresa');

var tituloc = document.getElementById('tituloc');

var descripcionEmpresa = document.getElementById('descripcionEmpresa');
var titulodesEmpresa = document.getElementById('titulodesEmpresa');

var brochure = document.getElementById('brochure');
var docBrochure = document.getElementById('docBrochure');


// evento para el input radio del "si"
document.getElementById('natural').addEventListener('click', function(e) {
  console.log('Vamos a habilitar el input text');
  nombre.style.display = "";
  telefono.style.display = "";
  email.style.display = "";
  descripcion.style.display = "";
  hojavida.style.display = "";
  titulon.style.display = "";
  tituloEmpresa.style.display = "none";

  nombrePer.style.display = "none";
  nombrePersona.style.display = "none";

  titulot.style.display = "";
  tituloem.style.display = "";

  telefonoContacto.style.display = "none";
  telefonoContac.style.display = "none";

  titulodes.style.display = "";

  emailEmp.style.display = "none";
  emailEmpresa.style.display = "none";

  tituloc.style.display = "";

  descripcionEmpresa.style.display = "none";
  titulodesEmpresa.style.display = "none";
  
  brochure.style.display = "none";
  docBrochure.style.display = "none";
  
  
});

// evento para el input radio del "no"
document.getElementById('empresa').addEventListener('click', function(e) {
  console.log('Vamos a deshabilitar el input text');
  nombre.style.display = "";
  telefono.style.display = "none";
  email.style.display = "none";
  descripcion.style.display = "none";
  hojavida.style.display = "none";
  titulon.style.display = "none";
  tituloEmpresa.style.display = "";

  nombrePer.style.display = "";
  nombrePersona.style.display = "";

  titulot.style.display = "none";
  tituloem.style.display = "none";

  telefonoContacto.style.display = "";
  telefonoContac.style.display = "";

  titulodes.style.display = "none";

  emailEmp.style.display = "";
  emailEmpresa.style.display = "";


  tituloc.style.display = "none";

  descripcionEmpresa.style.display = "";
  titulodesEmpresa.style.display = "";
  
  brochure.style.display = "";
  docBrochure.style.display = "";
  
});
