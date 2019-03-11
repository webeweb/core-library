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
 * Devis program lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisProgramLignes {

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
     * Code echelle.
     *
     * @var string
     */
    private $codeEchelle;

    /**
     * Code operation.
     *
     * @var string
     */
    private $codeOperation;

    /**
     * Code programme.
     *
     * @var string
     */
    private $codeProgramme;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Note resultat.
     *
     * @var float
     */
    private $noteResultat;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num ligne prog.
     *
     * @var int
     */
    private $numLigneProg;

    /**
     * Vitesse theorique.
     *
     * @var float
     */
    private $vitesseTheorique;

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
     * Get the code echelle.
     *
     * @return string Returns the code echelle.
     */
    public function getCodeEchelle() {
        return $this->codeEchelle;
    }

    /**
     * Get the code operation.
     *
     * @return string Returns the code operation.
     */
    public function getCodeOperation() {
        return $this->codeOperation;
    }

    /**
     * Get the code programme.
     *
     * @return string Returns the code programme.
     */
    public function getCodeProgramme() {
        return $this->codeProgramme;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the note resultat.
     *
     * @return float Returns the note resultat.
     */
    public function getNoteResultat() {
        return $this->noteResultat;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
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
     * Get the num ligne prog.
     *
     * @return int Returns the num ligne prog.
     */
    public function getNumLigneProg() {
        return $this->numLigneProg;
    }

    /**
     * Get the vitesse theorique.
     *
     * @return float Returns the vitesse theorique.
     */
    public function getVitesseTheorique() {
        return $this->vitesseTheorique;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code echelle.
     *
     * @param string $codeEchelle The code echelle.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCodeEchelle($codeEchelle) {
        $this->codeEchelle = $codeEchelle;
        return $this;
    }

    /**
     * Set the code operation.
     *
     * @param string $codeOperation The code operation.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCodeOperation($codeOperation) {
        $this->codeOperation = $codeOperation;
        return $this;
    }

    /**
     * Set the code programme.
     *
     * @param string $codeProgramme The code programme.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCodeProgramme($codeProgramme) {
        $this->codeProgramme = $codeProgramme;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the note resultat.
     *
     * @param float $noteResultat The note resultat.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setNoteResultat($noteResultat) {
        $this->noteResultat = $noteResultat;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num ligne prog.
     *
     * @param int $numLigneProg The num ligne prog.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setNumLigneProg($numLigneProg) {
        $this->numLigneProg = $numLigneProg;
        return $this;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float $vitesseTheorique The vitesse theorique.
     * @return DevisProgramLignes Returns this devis program lignes.
     */
    public function setVitesseTheorique($vitesseTheorique) {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
