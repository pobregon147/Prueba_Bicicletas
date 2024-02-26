function numero_de_bicicletas($pesos_paquetes, $N) {
    // Ordenar la lista de pesos de los paquetes
    sort($pesos_paquetes);
    
    // Inicializar el número de bicicletas
    $num_bicicletas = 0;
    
    // Inicializar los índices de inicio y final de la lista de pesos de los paquetes
    $inicio = 0;
    $fin = count($pesos_paquetes) - 1;
    
    // Recorrer la lista de pesos de los paquetes
    while ($inicio < $fin) {
        // Si la suma de los pesos de los paquetes es igual a N
        if ($pesos_paquetes[$inicio] + $pesos_paquetes[$fin] == $N) {
            // Incrementar el número de bicicletas y mover los índices
            $num_bicicletas++;
            $inicio++;
            $fin--;
        // Si la suma de los pesos de los paquetes es menor a N, mover el índice de inicio
        } elseif ($pesos_paquetes[$inicio] + $pesos_paquetes[$fin] < $N) {
            $inicio++;
        // Si la suma de los pesos de los paquetes es mayor a N, mover el índice de fin
        } else {
            $fin--;
        }
    }
    
    // Retornar el número de bicicletas
    return $num_bicicletas;
}

// Ejemplo de uso
$pesos_paquetes = array(5, 3, 2, 5, 6, 1, 4, 7, 9);
$N = 10;
echo "Número de bicicletas capaces de llevar los paquetes: " . numero_de_bicicletas($pesos_paquetes, $N);
