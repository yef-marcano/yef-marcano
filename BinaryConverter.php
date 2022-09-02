// Su objetivo principal es convertir cualquier string a binario

 function BinaryConverter ($text) {
    $response = $text.", en binario es: ";
    for ($i = 0; $i < strlen($text); $i++) { 
        $response .= sprintf("%08d ", decbin( ord($text[$i]) ));
    }
    return $response;
  };

  print_r(BinaryConverter("hola soy un texto binario"));
