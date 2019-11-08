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
 * Sous lignes analytiques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesAnalytiques {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

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
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

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
     * Numero ligne anal.
     *
     * @var int
     */
    private $numeroLigneAnal;

    /**
     * Numero sous ligne cpt ht.
     *
     * @var int
     */
    private $numeroSousLigneCptHt;

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
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
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
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
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
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
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
     * Get the numero ligne anal.
     *
     * @return int Returns the numero ligne anal.
     */
    public function getNumeroLigneAnal() {
        return $this->numeroLigneAnal;
    }

    /**
     * Get the numero sous ligne cpt ht.
     *
     * @return int Returns the numero sous ligne cpt ht.
     */
    public function getNumeroSousLigneCptHt() {
        return $this->numeroSousLigneCptHt;
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
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
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
     * Set the numero document.
     *
     * @param string $numeroDocument The numero document.
     */
    public function setNumeroDocument($numeroDocument) {
        $this->numeroDocument = $numeroDocument;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int $numeroLigneAnal The numero ligne anal.
     */
    public function setNumeroLigneAnal($numeroLigneAnal) {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }

    /**
     * Set the numero sous ligne cpt ht.
     *
     * @param int $numeroSousLigneCptHt The numero sous ligne cpt ht.
     */
    public function setNumeroSousLigneCptHt($numeroSousLigneCptHt) {
        $this->numeroSousLigneCptHt = $numeroSousLigneCptHt;
        return $this;
    }

    /**
     * Set the type document.
     *
     * @param string $typeDocument The type document.
     */
    public function setTypeDocument($typeDocument) {
        $this->typeDocument = $typeDocument;
        return $this;
    }
}
