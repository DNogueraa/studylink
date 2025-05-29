document.addEventListener("DOMContentLoaded", () => {
  const abrir = document.getElementById("abrirModal");
  const cerrar = document.getElementById("cerrarModal");
  const modal = document.getElementById("verTramiteModal");
  const formulario = document.getElementById("formularioVerTramite");
  const botonOtro = document.getElementById("consultarOtro");
  const resultado = document.getElementById("resultadoTramite");
  const contenido = document.getElementById("contenidoTramite");

  console.log("JS de verTramiteModal cargado");

  if (abrir && modal) {
    abrir.addEventListener("click", () => {
      modal.classList.remove("hidden");
      console.log("Modal abierto");
    });
  }

  if (cerrar && modal) {
   cerrar.addEventListener("click", () => {
  modal.classList.add("hidden");
  console.log("Modal cerrado con X");

  // ✅ Limpiar y resetear vista
  resultado.classList.add("hidden");
  formulario.classList.remove("hidden");
  contenido.innerHTML = "";
  formulario.reset(); 
});
  }

  modal?.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.classList.add("hidden");
    console.log("Modal cerrado haciendo clic fuera");

    // ✅ Limpiar y resetear vista
    resultado.classList.add("hidden");
    formulario.classList.remove("hidden");
    contenido.innerHTML = "";
    formulario.reset(); 
  }
});


  // ✅ FUNCIONALIDAD: Consultar otro
  botonOtro?.addEventListener("click", () => {
    formulario.classList.remove("hidden");
    resultado.classList.add("hidden");
    formulario.reset();
    contenido.innerHTML = "";
  });

  // ✅ ENVÍO del formulario
  formulario?.addEventListener("submit", (e) => {
    e.preventDefault();

    const identificador = document.getElementById("identificador").value.trim();
    const email = document.getElementById("email").value.trim();

    if (identificador === "" || email === "") {
      alert("Por favor, completa todos los campos.");
      return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Introduce un correo electrónico válido.");
      return;
    }
//Ruta correcta
    fetch(`${BASE_URL}/app/scripts/ver_tramite.php`, {
  method: "POST",
  headers: { "Content-Type": "application/x-www-form-urlencoded" },
  body: `identificador=${encodeURIComponent(identificador)}&email=${encodeURIComponent(email)}`
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        formulario.classList.add("hidden");
        resultado.classList.remove("hidden");

        contenido.innerHTML = `
          <p><strong>Estado:</strong> ${data.tramite.estado}</p>
          <p><strong>Fecha de inicio:</strong> ${data.tramite.fecha_inicio}</p>
          <p><strong>Última actualización:</strong> ${data.tramite.fecha_actualizacion}</p>
          <p><strong>Tipo de trámite:</strong> ${data.tramite.tipo_tramite}</p>
          <hr>
          <p><strong>Usuario:</strong> ${data.usuario.nombre} ${data.usuario.apellido} (${data.usuario.email})</p>
          <p><strong>Gestor:</strong> ${data.gestor.nombre} ${data.gestor.apellido} (${data.gestor.email})</p>
        `;
      } else {
        alert("No se encontró el trámite o los datos no coinciden.");
      }
    })
    .catch(error => {
      console.error("Error al consultar el trámite:", error);
      alert("Error al consultar el trámite.");
    });
  });
});
