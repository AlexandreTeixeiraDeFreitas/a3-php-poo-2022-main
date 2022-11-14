<?php

abstract class Vehicule
{
    protected int $id;
    protected $moteur;
    protected $name;
    protected $brand;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function getMoteur()
    {
        return $this->moteur;
    }

    public function setMoteur(?string $moteur)
    {
        $this->moteur = $moteur;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand(?string $brand)
    {
        $this->brand = $brand;

        return $this;
    }
}