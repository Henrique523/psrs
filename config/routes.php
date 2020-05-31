<?php

use Alura\Cursos\Controller\{Exclusao, FormularioInsercao};

return [
    '/novo-curso' => FormularioInsercao::class,
    '/excluir-curso' => Exclusao::class
];
