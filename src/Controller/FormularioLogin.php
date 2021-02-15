<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorHtnlTrait;

class FormularioLogin implements InterfaceControladorRequisicao
{
    use RenderizadorHtnlTrait;
    
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}

