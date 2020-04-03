<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dec tva filiales.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaFiliales {

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

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
     * Cpt filiale.
     *
     * @var string
     */
    private $cptFiliale;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Detention directe.
     *
     * @var float
     */
    private $detentionDirecte;

    /**
     * Detention indirecte.
     *
     * @var float
     */
    private $detentionIndirecte;

    /**
     * Forme juridique.
     *
     * @var string
     */
    private $formeJuridique;

    /**
     * Lib doss.
     *
     * @var string
     */
    private $libDoss;

    /**
     * No doss.
     *
     * @var string
     */
    private $noDoss;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Siren.
     *
     * @var string
     */
    private $siren;

    /**
     * Ville.
     *
     * @var string
     */
    private $ville;

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
     * Get the cpt filiale.
     *
     * @return string Returns the cpt filiale.
     */
    public function getCptFiliale() {
        return $this->cptFiliale;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the detention directe.
     *
     * @return float Returns the detention directe.
     */
    public function getDetentionDirecte() {
        return $this->detentionDirecte;
    }

    /**
     * Get the detention indirecte.
     *
     * @return float Returns the detention indirecte.
     */
    public function getDetentionIndirecte() {
        return $this->detentionIndirecte;
    }

    /**
     * Get the forme juridique.
     *
     * @return string Returns the forme juridique.
     */
    public function getFormeJuridique() {
        return $this->formeJuridique;
    }

    /**
     * Get the lib doss.
     *
     * @return string Returns the lib doss.
     */
    public function getLibDoss() {
        return $this->libDoss;
    }

    /**
     * Get the no doss.
     *
     * @return string Returns the no doss.
     */
    public function getNoDoss() {
        return $this->noDoss;
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
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
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
     * Get the siren.
     *
     * @return string Returns the siren.
     */
    public function getSiren() {
        return $this->siren;
    }

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the cpt filiale.
     *
     * @param string $cptFiliale The cpt filiale.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setCptFiliale($cptFiliale) {
        $this->cptFiliale = $cptFiliale;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the detention directe.
     *
     * @param float $detentionDirecte The detention directe.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDetentionDirecte($detentionDirecte) {
        $this->detentionDirecte = $detentionDirecte;
        return $this;
    }

    /**
     * Set the detention indirecte.
     *
     * @param float $detentionIndirecte The detention indirecte.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setDetentionIndirecte($detentionIndirecte) {
        $this->detentionIndirecte = $detentionIndirecte;
        return $this;
    }

    /**
     * Set the forme juridique.
     *
     * @param string $formeJuridique The forme juridique.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setFormeJuridique($formeJuridique) {
        $this->formeJuridique = $formeJuridique;
        return $this;
    }

    /**
     * Set the lib doss.
     *
     * @param string $libDoss The lib doss.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setLibDoss($libDoss) {
        $this->libDoss = $libDoss;
        return $this;
    }

    /**
     * Set the no doss.
     *
     * @param string $noDoss The no doss.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNoDoss($noDoss) {
        $this->noDoss = $noDoss;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the siren.
     *
     * @param string $siren The siren.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setSiren($siren) {
        $this->siren = $siren;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     * @return DecTvaFiliales Returns this Dec tva filiales.
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }
}
