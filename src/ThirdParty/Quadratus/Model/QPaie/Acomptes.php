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

use DateTime;

/**
 * Acomptes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Acomptes {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code user.
     *
     * @var string
     */
    private $codeUser;

    /**
     * Conges payes.
     *
     * @var bool
     */
    private $congesPayes;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Date added coll.
     *
     * @var DateTime|null
     */
    private $dateAddedColl;

    /**
     * En euro.
     *
     * @var bool
     */
    private $enEuro;

    /**
     * In bul.
     *
     * @var bool
     */
    private $inBul;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Paye.
     *
     * @var bool
     */
    private $paye;

    /**
     * Type paiement.
     *
     * @var string
     */
    private $typePaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code user.
     *
     * @return string Returns the code user.
     */
    public function getCodeUser() {
        return $this->codeUser;
    }

    /**
     * Get the conges payes.
     *
     * @return bool Returns the conges payes.
     */
    public function getCongesPayes() {
        return $this->congesPayes;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
     */
    public function getDateAdded() {
        return $this->dateAdded;
    }

    /**
     * Get the date added coll.
     *
     * @return DateTime|null Returns the date added coll.
     */
    public function getDateAddedColl() {
        return $this->dateAddedColl;
    }

    /**
     * Get the en euro.
     *
     * @return bool Returns the en euro.
     */
    public function getEnEuro() {
        return $this->enEuro;
    }

    /**
     * Get the in bul.
     *
     * @return bool Returns the in bul.
     */
    public function getInBul() {
        return $this->inBul;
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
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
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
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the paye.
     *
     * @return bool Returns the paye.
     */
    public function getPaye() {
        return $this->paye;
    }

    /**
     * Get the type paiement.
     *
     * @return string Returns the type paiement.
     */
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the conges payes.
     *
     * @param bool $congesPayes The conges payes.
     */
    public function setCongesPayes($congesPayes) {
        $this->congesPayes = $congesPayes;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     */
    public function setDateAdded(DateTime $dateAdded = null) {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the date added coll.
     *
     * @param DateTime|null $dateAddedColl The date added coll.
     */
    public function setDateAddedColl(DateTime $dateAddedColl = null) {
        $this->dateAddedColl = $dateAddedColl;
        return $this;
    }

    /**
     * Set the en euro.
     *
     * @param bool $enEuro The en euro.
     */
    public function setEnEuro($enEuro) {
        $this->enEuro = $enEuro;
        return $this;
    }

    /**
     * Set the in bul.
     *
     * @param bool $inBul The in bul.
     */
    public function setInBul($inBul) {
        $this->inBul = $inBul;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the paye.
     *
     * @param bool $paye The paye.
     */
    public function setPaye($paye) {
        $this->paye = $paye;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
