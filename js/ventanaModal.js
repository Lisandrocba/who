let cerrar = document.querySelectorAll(".cerrar")[0];
let abrir = document.querySelectorAll(".Trabajo")[0];
let ventana = document.querySelectorAll(".ventana")[0];
let contenedorVentana = document.querySelectorAll(".contenedorVentana")[0];

abrir.addEventListener("click", function(e){
    e.preventDefault();
    contenedorVentana.style.opacity = "1";
    contenedorVentana.style.visibility = "visible";
    ventana.classList.toggle("ventanaCerrar")
});

cerrar.addEventListener("click", function(){
    ventana.classList.toggle("ventanaCerrar");
    setTimeout(function(){
        contenedorVentana.style.opacity = "0";
        contenedorVentana.style.visibility = "hidden";
    },500)
});

window.addEventListener("click", function(e){
    if(e.target == contenedorVentana){
        ventana.classList.toggle("ventanaCerrar");
        setTimeout(function(){
            contenedorVentana.style.opacity = "0";
            contenedorVentana.style.visibility = "hidden";
        },500)
    }
})

