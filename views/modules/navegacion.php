<?php
//session_start();

if (isset($_SESSION["validar"])) {   
    
    if($_SESSION["rol"]==1){//administrador
        echo '<ul class="menu">
                <li  id="inicio"><a href="index.php?action=index">Inicio</a></li><li>   
                    <label for="drop-1" class="toggle">Usuarios+</label>
                    <a href="#">Usuarios</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li  id="autorizarU"><a href="index.php?action=usuarios">Autorizar Usuarios</a></li>
                        <li  id="listarU"><a href="index.php?action=lUsuarios">Listar usuarios</a></li> 
                    </ul> 

                </li>	
		            <li  id="añadirU"><a href="index.php?action=asig">Añadir asignatura</a></li>
                <li>   
                    <label for="drop-2" class="toggle">Cursos+</label>
                    <a href="#">Cursos</a>
                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li  id="añadirC"><a href="index.php?action=nCurso">Añadir curso</a></li>
                        <li  id="listarC"><a href="index.php?action=lCursos">Listar cursos</a></li>
                    </ul> 

                </li>	
                <li  id="subirArchivos"><a href="index.php?action=subirArchivo">Subir archivos</a></li><li>
                <li>   
                    <label for="drop-3" class="toggle">Mensajes+</label>
                    <a href="#">Mensajes</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li  id="enviarMensaje"><a href="index.php?action=msg">Enviar mensaje</a></li>
                        <li  id="verMensajes"><a href="index.php?action=verMensajes">Ver mensajes</a></li>
                    </ul> 

                </li>
                <li  id="perfil"><a href="index.php?action=perfil">Perfil</a></li>
                <li  id="calendario"><a href="index.php?action=calendario">Calendario</a></li>
                </ul>';
    }else if($_SESSION["rol"]==2){ //profesor
        echo '<ul class="menu">
              <li  id="inicio"><a href="index.php?action=index">Inicio</a></li>
              <li  id="subirApuntes"><a href="index.php?action=subirArchivo">Subir apuntes</a></li>
              <li  id="asignaturasProfe"><a href="index.php?action=asignaturasProfesor">Asignaturas</a></li>
              <li>   
                    <label for="drop-1" class="toggle">Practicas+</label>
                    <a href="#">Practicas</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li  id="subirPracticas"><a href="index.php?action=nPracticas">Subir practicas</a></li>
                        <li  id="verPracticas"><a href="index.php?action=practicas">Ver practicas</a></li>
                        <li><a href="index.php?action=practicasAlumnos">Prácticas de alumnos</a></li>
                    </ul> 

              </li>
              <li  id="borrarArchivos"><a href="index.php?action=borrarArchivos">Borrar archivos</a></li>
              <li  id="iniciarPizarra"><a href="index.php?action=pizarra">Iniciar pizarra</a></li>
              <li>   
                    <label for="drop-3" class="toggle">Mensajes+</label>
                    <a href="#">Mensajes</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li  id="enviarMensaje"><a href="index.php?action=msg">Enviar mensaje</a></li>
                        <li  id="verMensajes"><a href="index.php?action=verMensajes">Ver mensajes</a></li>
                    </ul> 

                </li>
              <li  id="perfil"><a href="index.php?action=perfil">Perfil</a></li>
              <li  id="calendario"><a href="index.php?action=calendario">Calendario</a></li>
              </ul>';
    }else if($_SESSION["rol"]==3){ //alumnos
        echo '<ul class="menu">
                <li  id="inicio"><a href="index.php?action=index">Inicio</a></li>
                <li><a href="index.php?action=asignaturas">Asignaturas</a></li>
                <li><a href="index.php?action=pizarra">Iniciar pizarra</a></li>
                 <li>   
                    <label for="drop-1" class="toggle">Practicas+</label>
                    <a href="#">Practicas</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                      <li><a href="index.php?action=practicas">Ver practicas</a></li>
                      <li><a href="index.php?action=entregar">Entregar Prácticas</a></li>
                    </ul> 

                </li>
                <li>   
                    <label for="drop-3" class="toggle">Mensajes+</label>
                    <a href="#">Mensajes</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li  id="enviarMensaje"><a href="index.php?action=msg">Enviar mensaje</a></li>
                        <li  id="verMensajes"><a href="index.php?action=verMensajes">Ver mensajes</a></li>
                    </ul> 

                </li>
                <li><a href="index.php?action=perfil">Perfil</a></li>
                <li><a href="index.php?action=calendario">Calendario</a></li>
              </ul>';
    }else if($_SESSION["rol"]==4){ //Por autorizar
        echo '<ul><li><a href="#">vista de usuario sin autorizar - Deberás esperar a que un administrador te autorice el acceso a los contenidos </a></li></ul>';
    }        
    
    

}
/*Habría que hacer otras visualizaciones para usuarios recién registrados sin autorización*/
?>

