<?php

namespace App\Models;

class User
{
    /**
     * l'id créée automatiquement lors de l'insertion dans la base de données
     */
    private int    $id;
    /**
     * nom de l'utilisateur
     */
    private string $name;

    /**
     * L'adresse email de l'utilisateur
     */
    private string $email;

    /**
     * mot de passe de l'utilisateur
     */
    private string $mdp;

    /**
     * Confirmation du mot  de passe
     */
    private string $comfirmMdp = "";

    /**
     * Défini si un utilisateur est admin(1 ou true) ou non(0 ou false) 
     */
    private int    $isAdmin;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

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
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of isAdmin
     */ 
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set the value of isAdmin
     *
     * @return  self
     */ 
    public function setIsAdmin(int $isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp(string $mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of comfirmMdp
     */ 
    public function getComfirmMdp()
    {
        return $this->comfirmMdp;
    }

    /**
     * Set the value of comfirmMdp
     *
     * @return  self
     */ 
    public function setComfirmMdp(string $comfirmMdp)
    {
        $this->comfirmMdp = $comfirmMdp;

        return $this;
    }
}