<?php

namespace ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Dev\UploadBundle\Annotation\Uploadable;
use Dev\UploadBundle\Annotation\UploadableField;


/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="ProduitBundle\Repository\ArticleRepository")
 * @Uploadable()
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ProduitBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="ProduitBundle\Entity\Marque")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Marque;

    /**
     * @var string
     *
     * @ORM\Column(name="nomArticle", type="string", length=255, unique=true)
     */
    private $nomArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @UploadableField(filename="filename", path="uploads")
     */
    private $file;

    /**
     * @return File|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file|null
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="prixArticle", type="float")
     */
    private $prixArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteArticle", type="integer")
     */
    private $quantiteArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionArticle", type="text")
     */
    private $descriptionArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreatArticle", type="datetimetz")
     */
    private $dateCreatArticle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomArticle
     *
     * @param string $nomArticle
     *
     * @return Article
     */
    public function setNomArticle($nomArticle)
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    /**
     * Get nomArticle
     *
     * @return string
     */
    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Article
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set prixArticle
     *
     * @param float $prixArticle
     *
     * @return Article
     */
    public function setPrixArticle($prixArticle)
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    /**
     * Get prixArticle
     *
     * @return float
     */
    public function getPrixArticle()
    {
        return $this->prixArticle;
    }

    /**
     * Set quantiteArticle
     *
     * @param integer $quantiteArticle
     *
     * @return Article
     */
    public function setQuantiteArticle($quantiteArticle)
    {
        $this->quantiteArticle = $quantiteArticle;

        return $this;
    }

    /**
     * Get quantiteArticle
     *
     * @return int
     */
    public function getQuantiteArticle()
    {
        return $this->quantiteArticle;
    }

    /**
     * Set descriptionArticle
     *
     * @param string $descriptionArticle
     *
     * @return Article
     */
    public function setDescriptionArticle($descriptionArticle)
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    /**
     * Get descriptionArticle
     *
     * @return string
     */
    public function getDescriptionArticle()
    {
        return $this->descriptionArticle;
    }

    /**
     * Set dateCreatArticle
     *
     * @param \DateTime $dateCreatArticle
     *
     * @return Article
     */
    public function setDateCreatArticle($dateCreatArticle)
    {
        $this->dateCreatArticle = $dateCreatArticle;

        return $this;
    }

    /**
     * Get dateCreatArticle
     *
     * @return \DateTime
     */
    public function getDateCreatArticle()
    {
        return $this->dateCreatArticle;
    }

    /**
     * Set categorie
     *
     * @param \ProduitBundle\Entity\Categorie $categorie
     *
     * @return Article
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \ProduitBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function __toString()
    {
        return $this->categorie;
    }

    /**
     * Set marque
     *
     * @param \ProduitBundle\Entity\Marque $marque
     *
     * @return Article
     */
    public function setMarque( $marque)
    {
        $this->Marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \ProduitBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->Marque;
    }
}
