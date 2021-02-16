<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;


class CursoEmJson implements RequestHandlerInterface
{
    private $repositorioDeCursos;
    /**
     * Class constructor.
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $cursos = $this->repositorioDeCursos->findAll();
        return new Response(
            200,  ['Content-Type' => 'application/json'],json_encode($cursos)
        );
    }

}

