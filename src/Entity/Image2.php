<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filepath;

    /**
     * @ORM\OneToOne(targetEntity="User2", inversedBy="image")
     */
    private $user;

    // ...

    public function getUser(): ?User//On peut retourner un User
    {
        return $this->user;
    }

    public function setUser(?User $user): self // on utilise l'objet User
    {
        $this->user = $user;

        return $this;
    }
}