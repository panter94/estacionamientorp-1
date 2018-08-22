<?php

// Funciones PHP del pin GPIO 17

  if ($_POST[encender17]) { 
   $a- exec("sudo python /var/www/enciende.py");
   echo $a;
  }

  if ($_POST[apagar17]) { 
   $a- exec("sudo python /var/www/apagado.py");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 17