<!DOCTYPE html>
<html>
<head>
<title>Practica 2.4</title>
  <style type="text/css">
  body {
    padding-left: 10em;
    font-family: Georgia, "Times New Roman", Times, serif; }
  h1 {
    font-family: Helvetica, Geneva, Arial,SunSans-Regular, sans-serif }
  div.titulo{text-align: center;}
  div.principal{
    border: 1px solid #696;
    padding: 10px;
    text-align: left; width: 1800px; height: 2000px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: #666 0px 2px 3px;
    -moz-box-shadow: #666 0px 2px 3px;
    box-shadow: #666 0px 2px 3px;
    background: #99FFD1;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#99FFD1), to(#FFFFFF));
    background: -webkit-linear-gradient(#99FFD1, #FFFFFF);
    background: -moz-linear-gradient(#99FFD1, #FFFFFF);
    background: -ms-linear-gradient(#99FFD1, #FFFFFF);
    background: -o-linear-gradient(#99FFD1, #FFFFFF);
    background: linear-gradient(#99FFD1, #FFFFFF);
    -pie-background: linear-gradient(#99FFD1, #FFFFFF); 
    behavior: url(/pie/PIE.htc);}
  table {
    width: auto;
    background:#FFFFFF;   
    border: 1px solid #000;}
  th, td {
    width: 50%;
    text-align: left;
    vertical-align: top;
    border: 1px solid #000;}
  </style>
</head>
<body>
<div class="principal">
         <div class="titulo">
                  <h2>EVALUACIÓN DE LA PILA DE DESARROLLO: LAMP </h2>
         </div>
         <div>
                  <h2>AUTORES:  </h2>
                  <ul>
                  <?php echo '<li> Inmaculada C. Moreno Roldán</li>'; ?>
                  <?php echo '<li> David A. López Gordo</li>'; ?>
                  </ul>
         </div>
         <div>
                  <h2>DETALLES DE LA PILA:  </h2>
                  <ul>
                  <?php echo '<li> LINUX (UBUNTU 20.04)</li>'; ?>
                  <?php echo '<li> APACHE 2.4.41</li>'; ?>
                  <?php echo '<li> MySQL</li>'; ?>
                  <?php echo '<li> PHP</li>'; ?>
                  </ul>
         </div>
         <div >
                  <h2>EJEMPLOS:  </h2>
                  <ul>
                  <li> <a href="#primero"> Ejemplo 1: Prevención de XSS  </a> </li>
                  <li> <a href="#segundo"> Ejemplo 2: Prevención de inyección SQL</a> </li>
                  <li> <a href="#tercero"> Ejemplo 3: Ejemplo de uso de token CSRF</a> </li>
                  </ul>
         </div>
         <table>
                <caption>Ejemplos de tecnicas de seguridad</caption>
                  <tr>
                     <th abbr="Nombre" scope="col">Nombre de la técnica</th>
                     <th abbr="inseguro" scope="col">Ejemplo inseguro</th>
                     <th abbr="seguro" scope="col">Ejemplo seguro</th>
                  </tr>
                  <tr>
                     <td> <a name='primero' <h1>Ejemplo 1: Cross-Site Scripting (XSS) </h1> </a>
                     <p>El XSS puede encontrarse en aplicaciones web que fallan a la hora de escapar correctamente contenido provisto por el usuario antes de renderizarlo en HTML. </p>
                     <p>Esto le permite a un atacante insertar código HTML en una página web (normalmente en la forma de etiquetas <script> </script>). </p>
                     <p>Los atacantes a menudo usan ataques XSS para robar información de cookies y sesiones, o para engañar usuarios mediante phishing. </p></td>
                     <td> <img src="https://i.ibb.co/VwwSCqF/XSS-inseguro.jpg" alt="XSS-inseguro" border="0"> </td>
                     <td> <img src="https://i.ibb.co/Ss8xqrZ/XSS-seguro.jpg" alt="XSS-seguro" border="0"> </td>
                  </tr>
                  <tr> <td><a name='segundo' <h1>Ejemplo 2: Inyección SQL </h1>  </a>
                     <p>La Inyección SQL es un exploit común en el cual un atacante altera los parámetros de la página (tales como datos de GET/POST o URLs) para insertar fragmentos de SQL que una aplicación web ejecuta directamente en su base d>
                     <p> Es probablemente la más peligrosa y común de las vulnerabilidades. </p> </td> 
                     <td> <img src="https://i.ibb.co/XX6ZjHC/SQL-INSEGURO.jpg" alt="SQL-INSEGURO" border="0"> </td>
                     <td> <img src="https://i.ibb.co/GFYJ8dS/SQL-SEGURO.jpg" alt="SQL-SEGURO" border="0"> </td>
                  </tr>
                  <tr>
                     <td><a name='tercero' <h1>Ejemplo 3: CSRF (Cross-Site Request Forgery)  </h1>  </a>
                         <p> Sucede cuando un sitio Web malicioso engaña a los usuarios y los induce a visitar una URL desde un sitio ante el cual ya se han autenticado — por lo tanto saca provecho de su condición de usuario ya autenticado. </p>
                         <p> El paquete django.contrib.csrf provee protección contra CSRF </p></td>
                     <td> <img src="https://i.ibb.co/yRBT753/csrf-token.jpg" alt="csrf-token" border="0"></td>
                     <td> <img src="https://i.ibb.co/ZmQvqSS/csrf-seguro.jpg" alt="csrf-seguro" border="0"></td>
                  </tr>
         </table>
</div>
</body>
</html>