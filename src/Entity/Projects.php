<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectsRepository::class)]
class Projects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $Imagen = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $Enlace = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->Imagen;
    }

    public function setImagen(string $Imagen): self
    {
        $this->Imagen = $Imagen;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->Fecha;
    }

    public function setFecha(\DateTimeInterface $Fecha): self
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getEnlace(): ?string
    {
        return $this->Enlace;
    }

    public function setEnlace(string $Enlace): self
    {
        $this->Enlace = $Enlace;

        return $this;
    }
}
