<?php

function countDeliveryBikes($packageWeights, $N) {
    // Ordenar la lista de pesos de los paquetes
    sort($packageWeights);
    
    // Inicializar el número de bicicletas
    $numBikes = 0;
    
    // Inicializar los índices de inicio y final de la lista de pesos de los paquetes
    $start = 0;
    $end = count($packageWeights) - 1;
    
    // Recorrer la lista de pesos de los paquetes
    while ($start < $end) {
        // Si la suma de los pesos de los paquetes es igual a N
        if ($packageWeights[$start] + $packageWeights[$end] == $N) {
            // Incrementar el número de bicicletas y mover los índices
            $numBikes++;
            $start++;
            $end--;
        // Si la suma de los pesos de los paquetes es menor a N, mover el índice de inicio
        } elseif ($packageWeights[$start] + $packageWeights[$end] < $N) {
            $start++;
        // Si la suma de los pesos de los paquetes es mayor a N, mover el índice de fin
        } else {
            $end--;
        }
    }
    
    // Retornar el número de bicicletas
    return $numBikes;
}

// Ejemplo de uso
$packageWeights = [5, 3, 2, 5, 6, 1, 4, 7, 9];
$N = 10;

echo "Número de bicicletas capaces de llevar los paquetes: " . countDeliveryBikes($packageWeights, $N);
