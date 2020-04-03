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
 * Produits.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Produits {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Compteur.
     *
     * @var int
     */
    private $compteur;

    /**
     * Cpt maj.
     *
     * @var int
     */
    private $cptMaj;

    /**
     * Dernier numero.
     *
     * @var int
     */
    private $dernierNumero;

    /**
     * Fichier licence.
     *
     * @var string
     */
    private $fichierLicence;

    /**
     * Gamme windows.
     *
     * @var bool
     */
    private $gammeWindows;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Lettre licence.
     *
     * @var string
     */
    private $lettreLicence;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Nom prod licence.
     *
     * @var string
     */
    private $nomProdLicence;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the compteur.
     *
     * @return int Returns the compteur.
     */
    public function getCompteur() {
        return $this->compteur;
    }

    /**
     * Get the cpt maj.
     *
     * @return int Returns the cpt maj.
     */
    public function getCptMaj() {
        return $this->cptMaj;
    }

    /**
     * Get the dernier numero.
     *
     * @return int Returns the dernier numero.
     */
    public function getDernierNumero() {
        return $this->dernierNumero;
    }

    /**
     * Get the fichier licence.
     *
     * @return string Returns the fichier licence.
     */
    public function getFichierLicence() {
        return $this->fichierLicence;
    }

    /**
     * Get the gamme windows.
     *
     * @return bool Returns the gamme windows.
     */
    public function getGammeWindows() {
        return $this->gammeWindows;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the lettre licence.
     *
     * @return string Returns the lettre licence.
     */
    public function getLettreLicence() {
        return $this->lettreLicence;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the nom prod licence.
     *
     * @return string Returns the nom prod licence.
     */
    public function getNomProdLicence() {
        return $this->nomProdLicence;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Produits Returns this Produits.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the compteur.
     *
     * @param int $compteur The compteur.
     * @return Produits Returns this Produits.
     */
    public function setCompteur($compteur) {
        $this->compteur = $compteur;
        return $this;
    }

    /**
     * Set the cpt maj.
     *
     * @param int $cptMaj The cpt maj.
     * @return Produits Returns this Produits.
     */
    public function setCptMaj($cptMaj) {
        $this->cptMaj = $cptMaj;
        return $this;
    }

    /**
     * Set the dernier numero.
     *
     * @param int $dernierNumero The dernier numero.
     * @return Produits Returns this Produits.
     */
    public function setDernierNumero($dernierNumero) {
        $this->dernierNumero = $dernierNumero;
        return $this;
    }

    /**
     * Set the fichier licence.
     *
     * @param string $fichierLicence The fichier licence.
     * @return Produits Returns this Produits.
     */
    public function setFichierLicence($fichierLicence) {
        $this->fichierLicence = $fichierLicence;
        return $this;
    }

    /**
     * Set the gamme windows.
     *
     * @param bool $gammeWindows The gamme windows.
     * @return Produits Returns this Produits.
     */
    public function setGammeWindows($gammeWindows) {
        $this->gammeWindows = $gammeWindows;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Produits Returns this Produits.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the lettre licence.
     *
     * @param string $lettreLicence The lettre licence.
     * @return Produits Returns this Produits.
     */
    public function setLettreLicence($lettreLicence) {
        $this->lettreLicence = $lettreLicence;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return Produits Returns this Produits.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom prod licence.
     *
     * @param string $nomProdLicence The nom prod licence.
     * @return Produits Returns this Produits.
     */
    public function setNomProdLicence($nomProdLicence) {
        $this->nomProdLicence = $nomProdLicence;
        return $this;
    }
}
