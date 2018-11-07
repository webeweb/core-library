<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

/**
 * D s n lieu travail model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DSNLieuTravail {

    /**
     * B t q.
     *
     * @var string
     */
    private $bTQ;

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
     * Code n a f.
     *
     * @var string
     */
    private $codeNAF;

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
     * I d.
     *
     * @var string
     */
    private $iD;

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
     * Get the b t q.
     *
     * @return string Returns the b t q.
     */
    public function getBTQ() {
        return $this->bTQ;
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
     * Get the code n a f.
     *
     * @return string Returns the code n a f.
     */
    public function getCodeNAF() {
        return $this->codeNAF;
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
     * Get the i d.
     *
     * @return string Returns the i d.
     */
    public function getID() {
        return $this->iD;
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
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code distribution.
     *
     * @param string $codeDistribution The code distribution.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setCodeDistribution($codeDistribution) {
        $this->codeDistribution = $codeDistribution;
        return $this;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /**
     * Set the code n a f.
     *
     * @param string $codeNAF The code n a f.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setCodeNAF($codeNAF) {
        $this->codeNAF = $codeNAF;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the complement voie.
     *
     * @param string $complementVoie The complement voie.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setComplementVoie($complementVoie) {
        $this->complementVoie = $complementVoie;
        return $this;
    }

    /**
     * Set the i d.
     *
     * @param string $iD The i d.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setID($iD) {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Set the nature juridique.
     *
     * @param string $natureJuridique The nature juridique.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setNatureJuridique($natureJuridique) {
        $this->natureJuridique = $natureJuridique;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     * @return DSNLieuTravail Returns this d s n lieu travail.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

}
