<?php
namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;
/**
 * Intro
 *
 * @ORM\Table(name="intro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IntroRepository")
 * @Vich\Uploadable
 *
 */
class Intro
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Intro
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
    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Intro
     */

}
