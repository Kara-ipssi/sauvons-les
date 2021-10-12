<?php

namespace Resources\database;

class Migration 
{
    public function createUserMigration()
    {
        return
            'CREATE TABLE user(
                id          INT AUTO_INCREMENT,
                name        VARCHAR(100) NOT NULL,
                email       VARCHAR(100) NOT NULL UNIQUE,
                mdp         VARCHAR(255) NOT NULL,
                isAdmin     BOOLEAN DEFAULT True,
                PRIMARY KEY(id)
            );';
    }

    public function createAnimalMigration()
    {
        return
            'CREATE TABLE animal(
                id              INT AUTO_INCREMENT,
                nom             VARCHAR(100) NOT NULL,
                age             INT NULL,
                poids           FLOAT NULL,
                image           VARCHAR(100) NULL,
                description     TEXT NULL,
                date_ajout      DATETIME DEFAULT CURRENT_TIMESTAMP,
                isDisponible    BOOLEAN DEFAULT TRUE,
                PRIMARY         KEY(id)
            );';
    }

    public function createContactMigration()
    {
        return
            'CREATE TABLE contact(
                id              INT AUTO_INCREMENT,
                email_contact   VARCHAR(100) NOT NULL,
                message         TEXT NOT NULL,
                tel             VARCHAR(25) NULL,
                PRIMARY         KEY(id)
            );';
    }
}