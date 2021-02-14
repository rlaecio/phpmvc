<?php
namespace Alura\Cursos\Controller;

abstract class ControlerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados):string
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../view/' . $caminhoTemplate;
        return $html = ob_get_clean();

    }
}

