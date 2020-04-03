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
 * Sous lignes compta gene.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesComptaGene {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Intitule compte.
     *
     * @var string
     */
    private $intituleCompte;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero document.
     *
     * @var string
     */
    private $numeroDocument;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Numero sous ligne.
     *
     * @var int
     */
    private $numeroSousLigne;

    /**
     * Type document.
     *
     * @var string
     */
    private $typeDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the intitule compte.
     *
     * @return string Returns the intitule compte.
     */
    public function getIntituleCompte() {
        return $this->intituleCompte;
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
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the numero document.
     *
     * @return string Returns the numero document.
     */
    public function getNumeroDocument() {
        return $this->numeroDocument;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Get the numero sous ligne.
     *
     * @return int Returns the numero sous ligne.
     */
    public function getNumeroSousLigne() {
        return $this->numeroSousLigne;
    }

    /**
     * Get the type document.
     *
     * @return string Returns the type document.
     */
    public function getTypeDocument() {
        return $this->typeDocument;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the intitule compte.
     *
     * @param string $intituleCompte The intitule compte.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setIntituleCompte($intituleCompte) {
        $this->intituleCompte = $intituleCompte;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero document.
     *
     * @param string $numeroDocument The numero document.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroDocument($numeroDocument) {
        $this->numeroDocument = $numeroDocument;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the numero sous ligne.
     *
     * @param int $numeroSousLigne The numero sous ligne.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setNumeroSousLigne($numeroSousLigne) {
        $this->numeroSousLigne = $numeroSousLigne;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string $typeDocument The type document.
     * @return SousLignesComptaGene Returns this Sous lignes compta gene.
     */
    public function setTypeDocument($typeDocument) {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
