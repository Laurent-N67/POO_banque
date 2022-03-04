<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_birth;
    private string $_ville;
    private array $_comptes;

    function __construct($nom, $prenom, $birth, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birth = $birth;
        $this->_ville = $ville;
        $this->_comptes = [];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getSurname(){
        return $this->_prenom;
    }
    public function getBirth(){
        return $this->_birth;
    }
    public function getVille(){
        return $this->_ville;   
    }
    public function getAge(){
         $intervale=date_diff(new DateTime($this-> getBirth()), new DateTime());
         return $intervale -> y;
    }
    public function addCompte(Compte $compte) {
        array_push($this->_comptes, $compte);
    }
    
    public function afficherComptes(){
        if(count($this->_comptes) > 0){
            echo "<h3>$this</h3>";
            foreach($this->_comptes as $compte)
                echo $compte;
        }else{
            echo "<h1>$this</h1><br>Auteur sans livres";
        }
    }
    public function __toString()
    {
        return $this->_prenom." ".$this->_nom." ".$this->getAge()."ans, habite ".$this->_ville."<br>";
    }
}