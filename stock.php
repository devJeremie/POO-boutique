<?php
class Stock {
  protected string $chaussure;
  protected string $survetement;
  protected bool $ensemble;

  public function __construct(string $couleur, string $modele, bool $sexe) {
    $this->couleur = $couleur;
    $this->modele = $modele;
    $this->sexe = $sexe;
  }

  public function setCouleur(string $couleur): void {
    $this->couleur = $couleur;
  }

  public function getCouleur(): string {
    return $this->couleur;
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
  public static function getChaussureQuantity() {
    return Chaussure::$quantity;
  }
  
  public static function getSurvetementQuantity() {
    return Survetement::$quantity;
  }
  
  public static function getEnsembleQuantity() {
    return Ensemble::$quantity;
  }
  public static function getStock() {
    return Ensemble::$quantity + Chaussure::$quantity + Survetement::$quantity;
  }
  

}