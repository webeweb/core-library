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
 * Trames lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TramesLignes {

    /**
     * Code.
     *
     * @var int
     */
    private $code;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code lib auto.
     *
     * @var string
     */
    private $codeLibAuto;

    /**
     * Compte.
     *
     * @var string
     */
    private $compte;

    /**
     * Compte contrepartie.
     *
     * @var string
     */
    private $compteContrepartie;

    /**
     * Credit.
     *
     * @var float
     */
    private $credit;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Debit.
     *
     * @var float
     */
    private $debit;

    /**
     * Is debit.
     *
     * @var bool
     */
    private $isDebit;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code lib auto.
     *
     * @return string Returns the code lib auto.
     */
    public function getCodeLibAuto() {
        return $this->codeLibAuto;
    }

    /**
     * Get the compte.
     *
     * @return string Returns the compte.
     */
    public function getCompte() {
        return $this->compte;
    }

    /**
     * Get the compte contrepartie.
     *
     * @return string Returns the compte contrepartie.
     */
    public function getCompteContrepartie() {
        return $this->compteContrepartie;
    }

    /**
     * Get the credit.
     *
     * @return float Returns the credit.
     */
    public function getCredit() {
        return $this->credit;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance() {
        return $this->dateEcheance;
    }

    /**
     * Get the debit.
     *
     * @return float Returns the debit.
     */
    public function getDebit() {
        return $this->debit;
    }

    /**
     * Get the is debit.
     *
     * @return bool Returns the is debit.
     */
    public function getIsDebit() {
        return $this->isDebit;
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
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Set the code.
     *
     * @param int $code The code.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code lib auto.
     *
     * @param string $codeLibAuto The code lib auto.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCodeLibAuto($codeLibAuto) {
        $this->codeLibAuto = $codeLibAuto;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string $compte The compte.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCompte($compte) {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string $compteContrepartie The compte contrepartie.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCompteContrepartie($compteContrepartie) {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the credit.
     *
     * @param float $credit The credit.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setDateEcheance(DateTime $dateEcheance = null) {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the debit.
     *
     * @param float $debit The debit.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Set the is debit.
     *
     * @param bool $isDebit The is debit.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setIsDebit($isDebit) {
        $this->isDebit = $isDebit;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }
}
