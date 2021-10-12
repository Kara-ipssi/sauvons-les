<?php

namespace App\Models;

use DateTime;

Class Animal
{
    private int $id;
    private string $nom;
    private int $age;
    private float $poids;
    private string $image;
    private bool $isDisponible;
    private string $description;
    private DateTime $date_ajout;

    public function __construct()
    {
        // $this->date_ajout = new DateTime();
        $this->isDisponible = true;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @return  self
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of isDisponible
     */ 
    public function getIsDisponible()
    {
        return $this->isDisponible;
    }

    /**
     * Set the value of isDisponible
     *
     * @return  self
     */ 
    public function setIsDisponible($isDisponible)
    {
        $this->isDisponible = $isDisponible;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date_ajout
     */ 
    public function getDate_ajout()
    {
        return $this->date_ajout;
    }

    /**
     * Set the value of date_ajout
     *
     * @return  self
     */ 
    // public function setDate_ajout($date_ajout)
    // {
    //     $this->date_ajout = $date_ajout;

    //     return $this;
    // }
}