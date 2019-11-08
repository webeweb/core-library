<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Type evenements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TypeEvenements {

    /**
     * Avec etat.
     *
     * @var bool
     */
    private $avecEtat;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Etat couleur1.
     *
     * @var int
     */
    private $etatCouleur1;

    /**
     * Etat couleur2.
     *
     * @var int
     */
    private $etatCouleur2;

    /**
     * Etat couleur3.
     *
     * @var int
     */
    private $etatCouleur3;

    /**
     * Etat priorite1.
     *
     * @var string
     */
    private $etatPriorite1;

    /**
     * Etat priorite2.
     *
     * @var string
     */
    private $etatPriorite2;

    /**
     * Etat priorite3.
     *
     * @var string
     */
    private $etatPriorite3;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Libelle1.
     *
     * @var string
     */
    private $libelle1;

    /**
     * Libelle2.
     *
     * @var string
     */
    private $libelle2;

    /**
     * Libelle3.
     *
     * @var string
     */
    private $libelle3;

    /**
     * Libelle etat.
     *
     * @var string
     */
    private $libelleEtat;

    /**
     * Pos flag.
     *
     * @var string
     */
    private $posFlag;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avec etat.
     *
     * @return bool Returns the avec etat.
     */
    public function getAvecEtat() {
        return $this->avecEtat;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the etat couleur1.
     *
     * @return int Returns the etat couleur1.
     */
    public function getEtatCouleur1() {
        return $this->etatCouleur1;
    }

    /**
     * Get the etat couleur2.
     *
     * @return int Returns the etat couleur2.
     */
    public function getEtatCouleur2() {
        return $this->etatCouleur2;
    }

    /**
     * Get the etat couleur3.
     *
     * @return int Returns the etat couleur3.
     */
    public function getEtatCouleur3() {
        return $this->etatCouleur3;
    }

    /**
     * Get the etat priorite1.
     *
     * @return string Returns the etat priorite1.
     */
    public function getEtatPriorite1() {
        return $this->etatPriorite1;
    }

    /**
     * Get the etat priorite2.
     *
     * @return string Returns the etat priorite2.
     */
    public function getEtatPriorite2() {
        return $this->etatPriorite2;
    }

    /**
     * Get the etat priorite3.
     *
     * @return string Returns the etat priorite3.
     */
    public function getEtatPriorite3() {
        return $this->etatPriorite3;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the libelle1.
     *
     * @return string Returns the libelle1.
     */
    public function getLibelle1() {
        return $this->libelle1;
    }

    /**
     * Get the libelle2.
     *
     * @return string Returns the libelle2.
     */
    public function getLibelle2() {
        return $this->libelle2;
    }

    /**
     * Get the libelle3.
     *
     * @return string Returns the libelle3.
     */
    public function getLibelle3() {
        return $this->libelle3;
    }

    /**
     * Get the libelle etat.
     *
     * @return string Returns the libelle etat.
     */
    public function getLibelleEtat() {
        return $this->libelleEtat;
    }

    /**
     * Get the pos flag.
     *
     * @return string Returns the pos flag.
     */
    public function getPosFlag() {
        return $this->posFlag;
    }

    /**
     * Set the avec etat.
     *
     * @param bool $avecEtat The avec etat.
     */
    public function setAvecEtat($avecEtat) {
        $this->avecEtat = $avecEtat;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the etat couleur1.
     *
     * @param int $etatCouleur1 The etat couleur1.
     */
    public function setEtatCouleur1($etatCouleur1) {
        $this->etatCouleur1 = $etatCouleur1;
        return $this;
    }

    /**
     * Set the etat couleur2.
     *
     * @param int $etatCouleur2 The etat couleur2.
     */
    public function setEtatCouleur2($etatCouleur2) {
        $this->etatCouleur2 = $etatCouleur2;
        return $this;
    }

    /**
     * Set the etat couleur3.
     *
     * @param int $etatCouleur3 The etat couleur3.
     */
    public function setEtatCouleur3($etatCouleur3) {
        $this->etatCouleur3 = $etatCouleur3;
        return $this;
    }

    /**
     * Set the etat priorite1.
     *
     * @param string $etatPriorite1 The etat priorite1.
     */
    public function setEtatPriorite1($etatPriorite1) {
        $this->etatPriorite1 = $etatPriorite1;
        return $this;
    }

    /**
     * Set the etat priorite2.
     *
     * @param string $etatPriorite2 The etat priorite2.
     */
    public function setEtatPriorite2($etatPriorite2) {
        $this->etatPriorite2 = $etatPriorite2;
        return $this;
    }

    /**
     * Set the etat priorite3.
     *
     * @param string $etatPriorite3 The etat priorite3.
     */
    public function setEtatPriorite3($etatPriorite3) {
        $this->etatPriorite3 = $etatPriorite3;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle1.
     *
     * @param string $libelle1 The libelle1.
     */
    public function setLibelle1($libelle1) {
        $this->libelle1 = $libelle1;
        return $this;
    }

    /**
     * Set the libelle2.
     *
     * @param string $libelle2 The libelle2.
     */
    public function setLibelle2($libelle2) {
        $this->libelle2 = $libelle2;
        return $this;
    }

    /**
     * Set the libelle3.
     *
     * @param string $libelle3 The libelle3.
     */
    public function setLibelle3($libelle3) {
        $this->libelle3 = $libelle3;
        return $this;
    }

    /**
     * Set the libelle etat.
     *
     * @param string $libelleEtat The libelle etat.
     */
    public function setLibelleEtat($libelleEtat) {
        $this->libelleEtat = $libelleEtat;
        return $this;
    }

    /**
     * Set the pos flag.
     *
     * @param string $posFlag The pos flag.
     */
    public function setPosFlag($posFlag) {
        $this->posFlag = $posFlag;
        return $this;
    }
}
