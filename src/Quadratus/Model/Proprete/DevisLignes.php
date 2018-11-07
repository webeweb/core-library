<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

/**
 * Devis lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class DevisLignes {

    /**
     * Batiment.
     *
     * @var string
     */
    private $batiment;

    /**
     * Code local.
     *
     * @var string
     */
    private $codeLocal;

    /**
     * Code revetement.
     *
     * @var string
     */
    private $codeRevetement;

    /**
     * Etage.
     *
     * @var string
     */
    private $etage;

    /**
     * Identification.
     *
     * @var string
     */
    private $identification;

    /**
     * Libelle local.
     *
     * @var string
     */
    private $libelleLocal;

    /**
     * Libelle revetement.
     *
     * @var string
     */
    private $libelleRevetement;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num programme.
     *
     * @var int
     */
    private $numProgramme;

    /**
     * Sol mur.
     *
     * @var string
     */
    private $solMur;

    /**
     * Surface.
     *
     * @var float
     */
    private $surface;

    /**
     * Zone geographique.
     *
     * @var string
     */
    private $zoneGeographique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the batiment.
     *
     * @return string Returns the batiment.
     */
    public function getBatiment() {
        return $this->batiment;
    }

    /**
     * Get the code local.
     *
     * @return string Returns the code local.
     */
    public function getCodeLocal() {
        return $this->codeLocal;
    }

    /**
     * Get the code revetement.
     *
     * @return string Returns the code revetement.
     */
    public function getCodeRevetement() {
        return $this->codeRevetement;
    }

    /**
     * Get the etage.
     *
     * @return string Returns the etage.
     */
    public function getEtage() {
        return $this->etage;
    }

    /**
     * Get the identification.
     *
     * @return string Returns the identification.
     */
    public function getIdentification() {
        return $this->identification;
    }

    /**
     * Get the libelle local.
     *
     * @return string Returns the libelle local.
     */
    public function getLibelleLocal() {
        return $this->libelleLocal;
    }

    /**
     * Get the libelle revetement.
     *
     * @return string Returns the libelle revetement.
     */
    public function getLibelleRevetement() {
        return $this->libelleRevetement;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num programme.
     *
     * @return int Returns the num programme.
     */
    public function getNumProgramme() {
        return $this->numProgramme;
    }

    /**
     * Get the sol mur.
     *
     * @return string Returns the sol mur.
     */
    public function getSolMur() {
        return $this->solMur;
    }

    /**
     * Get the surface.
     *
     * @return float Returns the surface.
     */
    public function getSurface() {
        return $this->surface;
    }

    /**
     * Get the zone geographique.
     *
     * @return string Returns the zone geographique.
     */
    public function getZoneGeographique() {
        return $this->zoneGeographique;
    }

    /**
     * Set the batiment.
     *
     * @param string $batiment The batiment.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setBatiment($batiment) {
        $this->batiment = $batiment;
        return $this;
    }

    /**
     * Set the code local.
     *
     * @param string $codeLocal The code local.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setCodeLocal($codeLocal) {
        $this->codeLocal = $codeLocal;
        return $this;
    }

    /**
     * Set the code revetement.
     *
     * @param string $codeRevetement The code revetement.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setCodeRevetement($codeRevetement) {
        $this->codeRevetement = $codeRevetement;
        return $this;
    }

    /**
     * Set the etage.
     *
     * @param string $etage The etage.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setEtage($etage) {
        $this->etage = $etage;
        return $this;
    }

    /**
     * Set the identification.
     *
     * @param string $identification The identification.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setIdentification($identification) {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Set the libelle local.
     *
     * @param string $libelleLocal The libelle local.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setLibelleLocal($libelleLocal) {
        $this->libelleLocal = $libelleLocal;
        return $this;
    }

    /**
     * Set the libelle revetement.
     *
     * @param string $libelleRevetement The libelle revetement.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setLibelleRevetement($libelleRevetement) {
        $this->libelleRevetement = $libelleRevetement;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int $numProgramme The num programme.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setNumProgramme($numProgramme) {
        $this->numProgramme = $numProgramme;
        return $this;
    }

    /**
     * Set the sol mur.
     *
     * @param string $solMur The sol mur.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setSolMur($solMur) {
        $this->solMur = $solMur;
        return $this;
    }

    /**
     * Set the surface.
     *
     * @param float $surface The surface.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setSurface($surface) {
        $this->surface = $surface;
        return $this;
    }

    /**
     * Set the zone geographique.
     *
     * @param string $zoneGeographique The zone geographique.
     * @return DevisLignes Returns this devis lignes.
     */
    public function setZoneGeographique($zoneGeographique) {
        $this->zoneGeographique = $zoneGeographique;
        return $this;
    }

}
