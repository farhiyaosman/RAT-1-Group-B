<?php
  function convert($value) {

  	$result = preg_replace("/[^a-zA-Z]/", " ", $value);
  	return $result;
  }

  echo convert("Engineer-Wairuri-Kamau|20.00,15,16");
  echo convert("Doctor Wamvua Ka12mbua `12040102010");
  echo convert("Miss#tOopoi#susan£3311");
  echo convert("Mister%Jotham&Wafula_7+7");











 ?>
