<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroProduit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageProduit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionProduit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomProduit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prixProduit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroProduit(): ?string
    {
        return $this->numeroProduit;
    }

    public function setNumeroProduit(?string $numeroProduit): self
    {
        $this->numeroProduit = $numeroProduit;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->imageProduit;
    }

    public function setImageProduit(?string $imageProduit): self
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(?string $descriptionProduit): self
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(?string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getPrixProduit(): ?string
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(?string $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }
}
