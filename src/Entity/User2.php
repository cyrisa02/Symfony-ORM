<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class User
{
    // ...voir le fichier User1

    /**
     * @ORM\OneToOne(targetEntity="Image", mappedBy="user")
     */
    private $image;

    // ...

    public function getImage(): ?Image//regarder le getter et setter!!
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        $this->image = $image;

        // set (or unset) the owning side of the relation if necessary
        $newUser = null === $image ? null : $this;
        if ($image->getUser() !== $newUser) {
            $image->setUser($newUser);
        }

        return $this;
    }
}
