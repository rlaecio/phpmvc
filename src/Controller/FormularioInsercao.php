<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorHtnlTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadorHtnlTrait;
    
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('cursos/formulario.php', [
            'titulo' => 'Novo Curso',
        ]);
    }
}
