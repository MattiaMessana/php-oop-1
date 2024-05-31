<?php


class Actor {
    private string $name;
    private string $surname;

    public function setName($name){
        $this->name = $name;
    }
    public function setSurname($surname){
        $this->surname = $surname;
    }
}