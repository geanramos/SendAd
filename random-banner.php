<?php
// Lista de imagens disponíveis
$imagens = [
    "banner1.jpg",
    "banner2.jpg",
    "banner3.jpg"
];

// Seleciona uma imagem aleatória
$escolhida = $imagens[array_rand($imagens)];

// Define o tipo de conteúdo
header('Content-Type: image/jpeg');

// Exibe a imagem
readfile(__DIR__ . '/banners/' . $escolhida);
?>
