<?php

class Session
{
    public $attribut = [];


    public function add($key, $value)
    {
        // ajoute une clé et une valeur dans le tableau $attribut

        $this->attribut[$key] = $value;
    }

    public function update($key, $value)
    {
        // met à jour la valeur du tableau ayant la clé $key

        $this->attribut[$key] = $value;
    }

    public function __set($name, $value)
    {
        // appel la fonction add() créer précédemment pour ajouter un attribut dans notre tableau d’attribut

        $this->add($name, $value);
    }

    public function __get($name)
    {
        echo ($this->attribut[$name]);
    }
}
