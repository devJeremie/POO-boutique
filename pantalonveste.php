<?php
    require_once 'ensemble.php'
    class Pantalonveste extends Ensemble {
        private int $taille;
    
    public function __construct(string $couleur,int $taille,string $modele, bool $sexe){
        parent::__construct($couleur, $modele, $sexe)
        $this->taille =$taille;
    }
    public function setCouleur(string $couleur): void {
        $this->couleur = $couleur;
      }
    
      public function getCouleur(): string {
        return $this->couleur;
      }
      public function setTaille(int $taille): void {
        $this->taille = $taille;
      }
    
      public function getTaille(): int {
        return $this->taille;
      }
      public function setmodele(string $type): void {
        $this->modele = $modele;
      }
    
      public function getModele(): string {
        return $this->modele;
      }
    }   
