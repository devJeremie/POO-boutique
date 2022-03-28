<?php
class Ensemble {
  protected string $couleur;
  protected string $modele;
  protected bool $sexe;
  protected static int $quantity;

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
  public static function getQuantity() {
    return self::$quantity;
  }

}