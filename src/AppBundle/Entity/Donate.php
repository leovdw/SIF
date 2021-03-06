<?php
namespace AppBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;
/**
 * Donate
 *
 * @ORM\Table(name="donate")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DonateRepository")
 * @Vich\Uploadable
 *
 */
class Donate
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;
    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;
    // ...
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }
    public function getImageFile()
    {
        return $this->imageFile;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Donate
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }
    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Donate
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }
    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Donate
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        return $this;
    }
    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}