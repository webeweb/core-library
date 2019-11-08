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
 * Dos rev etat cpt.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevEtatCpt {

    /**
     * Collaborateur.
     *
     * @var string
     */
    private $collaborateur;

    /**
     * Credit.
     *
     * @var float
     */
    private $credit;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Debit.
     *
     * @var float
     */
    private $debit;

    /**
     * Etat cpt.
     *
     * @var string
     */
    private $etatCpt;

    /**
     * Modifie.
     *
     * @var bool
     */
    private $modifie;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Periode rev.
     *
     * @var DateTime|null
     */
    private $periodeRev;

    /**
     * Solde.
     *
     * @var float
     */
    private $solde;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the collaborateur.
     *
     * @return string Returns the collaborateur.
     */
    public function getCollaborateur() {
        return $this->collaborateur;
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
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
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
     * Get the etat cpt.
     *
     * @return string Returns the etat cpt.
     */
    public function getEtatCpt() {
        return $this->etatCpt;
    }

    /**
     * Get the modifie.
     *
     * @return bool Returns the modifie.
     */
    public function getModifie() {
        return $this->modifie;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the periode rev.
     *
     * @return DateTime|null Returns the periode rev.
     */
    public function getPeriodeRev() {
        return $this->periodeRev;
    }

    /**
     * Get the solde.
     *
     * @return float Returns the solde.
     */
    public function getSolde() {
        return $this->solde;
    }

    /**
     * Set the collaborateur.
     *
     * @param string $collaborateur The collaborateur.
     */
    public function setCollaborateur($collaborateur) {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the credit.
     *
     * @param float $credit The credit.
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the debit.
     *
     * @param float $debit The debit.
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Set the etat cpt.
     *
     * @param string $etatCpt The etat cpt.
     */
    public function setEtatCpt($etatCpt) {
        $this->etatCpt = $etatCpt;
        return $this;
    }

    /**
     * Set the modifie.
     *
     * @param bool $modifie The modifie.
     */
    public function setModifie($modifie) {
        $this->modifie = $modifie;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode rev.
     *
     * @param DateTime|null $periodeRev The periode rev.
     */
    public function setPeriodeRev(DateTime $periodeRev = null) {
        $this->periodeRev = $periodeRev;
        return $this;
    }

    /**
     * Set the solde.
     *
     * @param float $solde The solde.
     */
    public function setSolde($solde) {
        $this->solde = $solde;
        return $this;
    }
}
