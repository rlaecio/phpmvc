<?php
namespace Alura\Cursos\Controller;

class ControlerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados):void
    {
        extract($dados);
        require __DIR__ . '/../../view/' . $caminhoTemplate;

    }
}

