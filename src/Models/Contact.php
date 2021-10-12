<?php

namespace App\Models;

class Contact
{
    /**
     * l'id du formulaire de contact
     */
    private int $id;
    /**
     * email de contact
     */
    private string $email_contact;

    /**
     * contenu du formulaire de contact
     */
    private string $message;

    /**
     * Numéro de téléphone lié au formulaire de contact
     */
    private string $tel;
    

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
     * Get the value of email_contact
     */ 
    public function getEmail_contact()
    {
        return $this->email_contact;
    }

    /**
     * Set the value of email_contact
     *
     * @return  self
     */ 
    public function setEmail_contact($email_contact)
    {
        $this->email_contact = $email_contact;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}