<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="text")
     */
    private $Contenu;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomAuteurAssocie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CategorieAssocie;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreVues;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getNomAuteurAssocie(): ?string
    {
        return $this->NomAuteurAssocie;
    }

    public function setNomAuteurAssocie(string $NomAuteurAssocie): self
    {
        $this->NomAuteurAssocie = $NomAuteurAssocie;

        return $this;
    }

    public function getCategorieAssocie(): ?string
    {
        return $this->CategorieAssocie;
    }

    public function setCategorieAssocie(string $CategorieAssocie): self
    {
        $this->CategorieAssocie = $CategorieAssocie;

        return $this;
    }

    public function getNombreVues(): ?int
    {
        return $this->NombreVues;
    }

    public function setNombreVues(int $NombreVues): self
    {
        $this->NombreVues = $NombreVues;

        return $this;
    }
}
