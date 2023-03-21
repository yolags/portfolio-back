<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Form\ProjectsType;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/apiproject')]
class ApiController extends AbstractController
{
    #[Route('/', name: 'app_apiproject_index', methods: ['GET'])]
        public function getProjects(): JsonResponse
            {
                $projects = $this->getDoctrine()
                ->getRepository(Projects::class)
                ->findAll();
                $data = [];
                
            foreach ($projects as $projects) {
                $data[] = [
                    'nombre' => $projects->getNombre(),
                    'imagen' => $projects->getImagen(),
                    'fecha' => $projects->getFecha()->format('Y-m-d'),
                    'descripcion' => $projects->getDescripcion(),
                ];
            }
            
        return new JsonResponse($data);
    }
}