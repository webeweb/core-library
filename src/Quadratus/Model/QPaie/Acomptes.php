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

use DateTime;

/**
 * Acomptes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
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
     * @var boolean
     */
    private $congesPayes;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Date added.
     *
     * @var DateTime
     */
    private $dateAdded;

    /**
     * Date added coll.
     *
     * @var DateTime
     */
    private $dateAddedColl;

    /**
     * En euro.
     *
     * @var boolean
     */
    private $enEuro;

    /**
     * In bul.
     *
     * @var boolean
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
     * @var boolean
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
     * @return boolean Returns the conges payes.
     */
    public function getCongesPayes() {
        return $this->congesPayes;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the date added.
     *
     * @return DateTime Returns the date added.
     */
    public function getDateAdded() {
        return $this->dateAdded;
    }

    /**
     * Get the date added coll.
     *
     * @return DateTime Returns the date added coll.
     */
    public function getDateAddedColl() {
        return $this->dateAddedColl;
    }

    /**
     * Get the en euro.
     *
     * @return boolean Returns the en euro.
     */
    public function getEnEuro() {
        return $this->enEuro;
    }

    /**
     * Get the in bul.
     *
     * @return boolean Returns the in bul.
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
     * @return boolean Returns the paye.
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
     * @return Acomptes Returns this acomptes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string $codeUser The code user.
     * @return Acomptes Returns this acomptes.
     */
    public function setCodeUser($codeUser) {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the conges payes.
     *
     * @param boolean $congesPayes The conges payes.
     * @return Acomptes Returns this acomptes.
     */
    public function setCongesPayes($congesPayes) {
        $this->congesPayes = $congesPayes;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return Acomptes Returns this acomptes.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime $dateAdded The date added.
     * @return Acomptes Returns this acomptes.
     */
    public function setDateAdded(DateTime $dateAdded = null) {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the date added coll.
     *
     * @param DateTime $dateAddedColl The date added coll.
     * @return Acomptes Returns this acomptes.
     */
    public function setDateAddedColl(DateTime $dateAddedColl = null) {
        $this->dateAddedColl = $dateAddedColl;
        return $this;
    }

    /**
     * Set the en euro.
     *
     * @param boolean $enEuro The en euro.
     * @return Acomptes Returns this acomptes.
     */
    public function setEnEuro($enEuro) {
        $this->enEuro = $enEuro;
        return $this;
    }

    /**
     * Set the in bul.
     *
     * @param boolean $inBul The in bul.
     * @return Acomptes Returns this acomptes.
     */
    public function setInBul($inBul) {
        $this->inBul = $inBul;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Acomptes Returns this acomptes.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return Acomptes Returns this acomptes.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return Acomptes Returns this acomptes.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return Acomptes Returns this acomptes.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the paye.
     *
     * @param boolean $paye The paye.
     * @return Acomptes Returns this acomptes.
     */
    public function setPaye($paye) {
        $this->paye = $paye;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     * @return Acomptes Returns this acomptes.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }

}
