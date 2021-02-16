<?php

namespace Alura\Cursos\Controller;


use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Alura\Cursos\Helper\RenderizadorHtnlTrait;


class ListarCursos implements RequestHandlerInterface
{
    use RenderizadorHtnlTrait; 
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $cursos = $this->repositorioDeCursos->findAll();
        echo $this->renderizaHtml('cursos/listar-cursos.php', [
            'cursos' => $cursos,
            'titulo' => 'Listar Cursos',
        ]);
    }
}
