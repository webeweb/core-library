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
 * Fact fourn lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class FactFournLignes {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Collaborateur.
     *
     * @var string
     */
    private $collaborateur;

    /**
     * Compte.
     *
     * @var string
     */
    private $compte;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant credit.
     *
     * @var float
     */
    private $montantCredit;

    /**
     * Montant debit.
     *
     * @var float
     */
    private $montantDebit;

    /**
     * Num entete.
     *
     * @var string
     */
    private $numEntete;

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
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
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
     * Get the compte.
     *
     * @return string Returns the compte.
     */
    public function getCompte() {
        return $this->compte;
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
     * Get the montant credit.
     *
     * @return float Returns the montant credit.
     */
    public function getMontantCredit() {
        return $this->montantCredit;
    }

    /**
     * Get the montant debit.
     *
     * @return float Returns the montant debit.
     */
    public function getMontantDebit() {
        return $this->montantDebit;
    }

    /**
     * Get the num entete.
     *
     * @return string Returns the num entete.
     */
    public function getNumEntete() {
        return $this->numEntete;
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
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string $collaborateur The collaborateur.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCollaborateur($collaborateur) {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string $compte The compte.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setCompte($compte) {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant credit.
     *
     * @param float $montantCredit The montant credit.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setMontantCredit($montantCredit) {
        $this->montantCredit = $montantCredit;
        return $this;
    }

    /**
     * Set the montant debit.
     *
     * @param float $montantDebit The montant debit.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setMontantDebit($montantDebit) {
        $this->montantDebit = $montantDebit;
        return $this;
    }

    /**
     * Set the num entete.
     *
     * @param string $numEntete The num entete.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setNumEntete($numEntete) {
        $this->numEntete = $numEntete;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return FactFournLignes Returns this Fact fourn lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }
}
