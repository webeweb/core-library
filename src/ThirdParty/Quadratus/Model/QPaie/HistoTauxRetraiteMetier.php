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
 * Histo taux retraite metier model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTauxRetraiteMetier {

    /**
     * A partir de.
     *
     * @var DateTime
     */
    private $aPartirDe;

    /**
     * Categ salarie.
     *
     * @var int
     */
    private $categSalarie;

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code metier.
     *
     * @var string
     */
    private $codeMetier;

    /**
     * Format non etendu.
     *
     * @var bool
     */
    private $formatNonEtendu;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Taux patronal.
     *
     * @var float
     */
    private $tauxPatronal;

    /**
     * Taux salarial.
     *
     * @var float
     */
    private $tauxSalarial;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime Returns the a partir de.
     */
    public function getAPartirDe() {
        return $this->aPartirDe;
    }

    /**
     * Get the categ salarie.
     *
     * @return int Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the code metier.
     *
     * @return string Returns the code metier.
     */
    public function getCodeMetier() {
        return $this->codeMetier;
    }

    /**
     * Get the format non etendu.
     *
     * @return bool Returns the format non etendu.
     */
    public function getFormatNonEtendu() {
        return $this->formatNonEtendu;
    }

    /**
     * Get the indice categ.
     *
     * @return int Returns the indice categ.
     */
    public function getIndiceCateg() {
        return $this->indiceCateg;
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
     * Get the taux patronal.
     *
     * @return float Returns the taux patronal.
     */
    public function getTauxPatronal() {
        return $this->tauxPatronal;
    }

    /**
     * Get the taux salarial.
     *
     * @return float Returns the taux salarial.
     */
    public function getTauxSalarial() {
        return $this->tauxSalarial;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime $aPartirDe The a partir de.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param int $categSalarie The categ salarie.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code metier.
     *
     * @param string $codeMetier The code metier.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setCodeMetier($codeMetier) {
        $this->codeMetier = $codeMetier;
        return $this;
    }

    /**
     * Set the format non etendu.
     *
     * @param bool $formatNonEtendu The format non etendu.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setFormatNonEtendu($formatNonEtendu) {
        $this->formatNonEtendu = $formatNonEtendu;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float $tauxPatronal The taux patronal.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setTauxPatronal($tauxPatronal) {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float $tauxSalarial The taux salarial.
     * @return HistoTauxRetraiteMetier Returns this histo taux retraite metier.
     */
    public function setTauxSalarial($tauxSalarial) {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }
}
