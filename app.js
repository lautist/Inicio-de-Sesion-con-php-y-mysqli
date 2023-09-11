let botonRegistro = document.querySelector(".btn-cs");

//Al darle al boton cambia entre el menu de registro y el menu de inicio
botonRegistro.addEventListener("click", function(){
    let iniciar = document.querySelector(".con");
    let registrar = document.querySelector(".register");
    console.log("FUNCIONA EL BOTON")

    // Obtener el valor de la propiedad "display" del elemento
    const estiloDisplay = window.getComputedStyle(iniciar).getPropertyValue("display");


    if(estiloDisplay === "none"){
        iniciar.style.display = "block";
        registrar.style.display = "none";

        botonRegistro.textContent = "Registro";
    }else{
        registrar.style.display = "block";
        iniciar.style.display = "none";
        botonRegistro.textContent = "Iniciar Sesion";
    }
});
