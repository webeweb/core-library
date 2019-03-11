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
 * Sous lignes anal achats model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesAnalAchats {

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Indice ligne.
     *
     * @var int
     */
    private $indiceLigne;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * No piece.
     *
     * @var string
     */
    private $noPiece;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code fournisseur.
     *
     * @return string Returns the code fournisseur.
     */
    public function getCodeFournisseur() {
        return $this->codeFournisseur;
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
     * Get the indice ligne.
     *
     * @return int Returns the indice ligne.
     */
    public function getIndiceLigne() {
        return $this->indiceLigne;
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
     * Get the no piece.
     *
     * @return string Returns the no piece.
     */
    public function getNoPiece() {
        return $this->noPiece;
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
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the indice ligne.
     *
     * @param int $indiceLigne The indice ligne.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setIndiceLigne($indiceLigne) {
        $this->indiceLigne = $indiceLigne;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the no piece.
     *
     * @param string $noPiece The no piece.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setNoPiece($noPiece) {
        $this->noPiece = $noPiece;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the numero ligne anal.
     *
     * @param int $numeroLigneAnal The numero ligne anal.
     * @return SousLignesAnalAchats Returns this sous lignes anal achats.
     */
    public function setNumeroLigneAnal($numeroLigneAnal) {
        $this->numeroLigneAnal = $numeroLigneAnal;
        return $this;
    }
}
