<?php

//L'annotation Column

//L'annotation @ORM\Column() est la plus basique, mais aussi la plus importante, voyons donc plus en détails les options que nous pouvons utiliser pour définir nos colonnes :

//name : permet de préciser un nom différent de la simple conversion de la propriété en snake_case.

//type : permet de préciser le type de valeur à utiliser, par exemple, string correspond au type SQL VARCHAR, integer au type INT. Dans notre exemple, la propriété $roles a un type de données json puisque c'est un tableau, cela se convertit au niveau de la base de données par une colonne de type longtext. Pour découvrir tous les types possibles, allez voir la liste complète.

//length : uniquement lorsque le type est string, permet de définir la taille de la colonne.

//nullable : valeur booléenne permettant de déterminer si la valeur d'une colonne peut être nulle.

//unique : valeur booléenne permettant de déterminer si une colonne est unique.

//precision : uniquement lorsque le type est decimal, permet de définir le nombre total de chiffres.

//scale : uniquement lorsque le type est decimal, permet de définir le nombre de chiffres après la virgule.

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Je_donne_le_nom_que_je_veux!")
 * @ORM\Entity()
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id; // clé primaire

    /**
     * @ORM\Column(name="exemple_de_nom_en_option", type="string", length=180, unique=true)
     */
    private $username; // string

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
