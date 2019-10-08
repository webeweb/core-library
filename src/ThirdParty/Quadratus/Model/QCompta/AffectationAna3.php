<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Affectation ana3 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class AffectationAna3 {

    /**
     * Annee recolte.
     *
     * @var string
     */
    private $anneeRecolte;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Num compte.
     *
     * @var string
     */
    private $numCompte;

    /**
     * Pourcentage.
     *
     * @var float
     */
    private $pourcentage;

    /**
     * Quantite1.
     *
     * @var float
     */
    private $quantite1;

    /**
     * Quantite2.
     *
     * @var float
     */
    private $quantite2;

    /**
     * Sens.
     *
     * @var string
     */
    private $sens;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee recolte.
     *
     * @return string Returns the annee recolte.
     */
    public function getAnneeRecolte() {
        return $this->anneeRecolte;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the num compte.
     *
     * @return string Returns the num compte.
     */
    public function getNumCompte() {
        return $this->numCompte;
    }

    /**
     * Get the pourcentage.
     *
     * @return float Returns the pourcentage.
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * Get the quantite1.
     *
     * @return float Returns the quantite1.
     */
    public function getQuantite1() {
        return $this->quantite1;
    }

    /**
     * Get the quantite2.
     *
     * @return float Returns the quantite2.
     */
    public function getQuantite2() {
        return $this->quantite2;
    }

    /**
     * Get the sens.
     *
     * @return string Returns the sens.
     */
    public function getSens() {
        return $this->sens;
    }

    /**
     * Set the annee recolte.
     *
     * @param string $anneeRecolte The annee recolte.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setAnneeRecolte($anneeRecolte) {
        $this->anneeRecolte = $anneeRecolte;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string $numCompte The num compte.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setNumCompte($numCompte) {
        $this->numCompte = $numCompte;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float $pourcentage The pourcentage.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the quantite1.
     *
     * @param float $quantite1 The quantite1.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setQuantite1($quantite1) {
        $this->quantite1 = $quantite1;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float $quantite2 The quantite2.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setQuantite2($quantite2) {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the sens.
     *
     * @param string $sens The sens.
     * @return AffectationAna3 Returns this affectation ana3.
     */
    public function setSens($sens) {
        $this->sens = $sens;
        return $this;
    }
}
