<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Prospects.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Prospects {

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code prospect.
     *
     * @var string
     */
    private $codeProspect;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

    /**
     * Nom suite2.
     *
     * @var string
     */
    private $nomSuite2;

    /**
     * Nom suite3.
     *
     * @var string
     */
    private $nomSuite3;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the code prospect.
     *
     * @return string Returns the code prospect.
     */
    public function getCodeProspect() {
        return $this->codeProspect;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
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
     * Get the nom suite.
     *
     * @return string Returns the nom suite.
     */
    public function getNomSuite() {
        return $this->nomSuite;
    }

    /**
     * Get the nom suite2.
     *
     * @return string Returns the nom suite2.
     */
    public function getNomSuite2() {
        return $this->nomSuite2;
    }

    /**
     * Get the nom suite3.
     *
     * @return string Returns the nom suite3.
     */
    public function getNomSuite3() {
        return $this->nomSuite3;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code prospect.
     *
     * @param string $codeProspect The code prospect.
     */
    public function setCodeProspect($codeProspect) {
        $this->codeProspect = $codeProspect;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom suite2.
     *
     * @param string $nomSuite2 The nom suite2.
     */
    public function setNomSuite2($nomSuite2) {
        $this->nomSuite2 = $nomSuite2;
        return $this;
    }

    /**
     * Set the nom suite3.
     *
     * @param string $nomSuite3 The nom suite3.
     */
    public function setNomSuite3($nomSuite3) {
        $this->nomSuite3 = $nomSuite3;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }
}
