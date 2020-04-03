<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

/**
 * Dsn lieu travail.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DsnLieuTravail {

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
     * Code distribution.
     *
     * @var string
     */
    private $codeDistribution;

    /**
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Code naf.
     *
     * @var string
     */
    private $codeNaf;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Complement voie.
     *
     * @var string
     */
    private $complementVoie;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Nature juridique.
     *
     * @var string
     */
    private $natureJuridique;

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
     * Raison sociale.
     *
     * @var string
     */
    private $raisonSociale;

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
     * Get the code distribution.
     *
     * @return string Returns the code distribution.
     */
    public function getCodeDistribution() {
        return $this->codeDistribution;
    }

    /**
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
    }

    /**
     * Get the code naf.
     *
     * @return string Returns the code naf.
     */
    public function getCodeNaf() {
        return $this->codeNaf;
    }

    /**
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
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
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the complement voie.
     *
     * @return string Returns the complement voie.
     */
    public function getComplementVoie() {
        return $this->complementVoie;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the nature juridique.
     *
     * @return string Returns the nature juridique.
     */
    public function getNatureJuridique() {
        return $this->natureJuridique;
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
     * Get the raison sociale.
     *
     * @return string Returns the raison sociale.
     */
    public function getRaisonSociale() {
        return $this->raisonSociale;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code distribution.
     *
     * @param string $codeDistribution The code distribution.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodeDistribution($codeDistribution) {
        $this->codeDistribution = $codeDistribution;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code naf.
     *
     * @param string $codeNaf The code naf.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodeNaf($codeNaf) {
        $this->codeNaf = $codeNaf;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement voie.
     *
     * @param string $complementVoie The complement voie.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setComplementVoie($complementVoie) {
        $this->complementVoie = $complementVoie;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nature juridique.
     *
     * @param string $natureJuridique The nature juridique.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setNatureJuridique($natureJuridique) {
        $this->natureJuridique = $natureJuridique;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     * @return DsnLieuTravail Returns this Dsn lieu travail.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }
}
