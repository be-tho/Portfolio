require('./bootstrap');
//lista de proyectos
const todo = document.getElementById('todo');
const desarrollo = document.getElementById('desarrollo');
const diseno = document.getElementById('diseno');
const proyectos = document.querySelectorAll('.proyecto');

desarrollo.addEventListener('click', () => {
    proyectos.forEach(proyecto => {
        proyecto.classList.remove('show');
        proyecto.classList.add('hide');
    })
    const desarrolloProyectos = document.querySelectorAll('.desarrollo');
    setTimeout(() => {
        desarrolloProyectos.forEach(proyecto => {
            proyecto.classList.remove('hide');
            proyecto.classList.add('show');
        })
    }, 200);
})
diseno.addEventListener('click', () => {
    proyectos.forEach(proyecto => {
        proyecto.classList.remove('show');
        proyecto.classList.add('hide');
    })
    const disenoProyectos = document.querySelectorAll('.diseno');
    setTimeout(() => {
        disenoProyectos.forEach(proyecto => {
            proyecto.classList.remove('hide');
            proyecto.classList.add('show');
        })
    }, 200);
})

//evitar la recarga de la pagina al hacer click en la seccion de todos los proyectos


todo.addEventListener('click', () => {
    //primero buscar si alguno tiene la clase show, si no la tiene, se la quitamos a todos
    //luego de 10sg le agregamos la clase show a todos
    proyectos.forEach(proyecto => {
        proyecto.classList.remove('show');
        proyecto.classList.add('hide');
    })
    //evitar el parpadeo de salto de pagina

    setTimeout(() => {
        proyectos.forEach(proyecto => {
            proyecto.classList.remove('hide');
            proyecto.classList.add('show');
        })
    }, 50);
})

