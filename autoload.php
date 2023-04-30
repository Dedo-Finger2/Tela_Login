<?php
    // Autoload
    spl_autoload_register(function ($class) {
        // converte o namespace em um caminho de arquivo
        $path = str_replace('\\', '/', $class);
        
        // adiciona o prefixo do caminho base para as classes
        $file = __DIR__ . '/' . $path . '.php';
        
        // verifica se o arquivo existe e o carrega
        if (file_exists($file)) {
            require_once $file;
        }
    });
