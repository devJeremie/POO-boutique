<?php
    require_once 'chaussure.php';

    class Basket extends Chaussure {
        private int $pointure;
        private bool $type;
         
    
    
    public function __construct(string $couleur,int $pointure,bool $type,string $modele, bool $sexe){
        parent::__construct($couleur, $modele, $sexe,)
        $this->pointure =$pointure;
        $this->type =$type;
        Chaussure::$quantity++;

        
    }
    public function setCouleur(string $couleur): void {
        $this->couleur = $couleur;
      }
    
      public function getCouleur(): string {
        return $this->couleur;
      }
      public function setPointure(int $pointure): void {
        $this->pointure = $pointure;
      }
    
      public function getPointure(): int {
        return $this->pointure;
      }
      public function setType(bool $type): void {
        $this->type = $type;
      }
    
      public function getType(): bool {
        return $this->type;
      }
      public function setModele(string $modele): void {
        $this->modele = $modele;
      }
    
      public function getModele(): string {
        return $this->modele;
      }
      public function setSexe(bool $sexe): void {
        $this->sexe = $sexe;
      }
    
      public function getType(): bool {
        return $this->sexe;
      }
}
