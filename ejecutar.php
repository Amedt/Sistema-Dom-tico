<?php
  $valor= $_POST["voz"];
  if($valor=="viki encender la luz sala" || $valor=="viki encender sala")
  {
    exec("sudo python actuadores/sala1.py");
  }
  if($valor=="viki apagar la sala") || $valor=="viki apagar sala")
  {
    exec("sudo python actuadores/sala0.py");
  }
?>
