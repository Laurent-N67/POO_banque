<?php

class Compte{
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;
    
    
    
    function __construct($libelle, $solde, $devise,  $titulaire){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->addCompte($this);
    }
    public function getLibelle(){
        return $this->_libelle;
    }
    public function getSolde(){
        return $this->_solde;
    }
    public function credit($montant){
        $this->_solde =$this->_solde+$montant;

        // $this->_solde += $montant;

        return $this->_solde;
    }
    public function debit($retrait){
        $this->_solde =$this->_solde-$retrait;
        return $this->_solde;
    }
    // public function virement($virement){}
    // public function virement($virement){
    //     $this->_solde
    // }
    public function getdevise(){
        return $this->_devise;
    }
    public function getTitulaire(){
        return $this->_titulaire;
    }
    public function __toString()
    {
        return $this->_libelle." ".$this->_solde." ".$this->_devise." <br>";
    }
}