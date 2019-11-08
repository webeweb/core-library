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
 * Absences excel histo.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesExcelHisto {

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Nbh sais.
     *
     * @var float
     */
    private $nbhSais;

    /**
     * Nbh sais corr.
     *
     * @var float
     */
    private $nbhSaisCorr;

    /**
     * Nbj sais.
     *
     * @var float
     */
    private $nbjSais;

    /**
     * Nbj sais corr.
     *
     * @var float
     */
    private $nbjSaisCorr;

    /**
     * Num evenement.
     *
     * @var int
     */
    private $numEvenement;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Per paie.
     *
     * @var DateTime|null
     */
    private $perPaie;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode deb corr.
     *
     * @var DateTime|null
     */
    private $periodeDebCorr;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Periode fin corr.
     *
     * @var DateTime|null
     */
    private $periodeFinCorr;

    /**
     * Transfert abs.
     *
     * @var bool
     */
    private $transfertAbs;

    /**
     * Type abs cp.
     *
     * @var string
     */
    private $typeAbsCp;

    /**
     * Type abs cp corr.
     *
     * @var string
     */
    private $typeAbsCpCorr;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the nbh sais.
     *
     * @return float Returns the nbh sais.
     */
    public function getNbhSais() {
        return $this->nbhSais;
    }

    /**
     * Get the nbh sais corr.
     *
     * @return float Returns the nbh sais corr.
     */
    public function getNbhSaisCorr() {
        return $this->nbhSaisCorr;
    }

    /**
     * Get the nbj sais.
     *
     * @return float Returns the nbj sais.
     */
    public function getNbjSais() {
        return $this->nbjSais;
    }

    /**
     * Get the nbj sais corr.
     *
     * @return float Returns the nbj sais corr.
     */
    public function getNbjSaisCorr() {
        return $this->nbjSaisCorr;
    }

    /**
     * Get the num evenement.
     *
     * @return int Returns the num evenement.
     */
    public function getNumEvenement() {
        return $this->numEvenement;
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
     * Get the per paie.
     *
     * @return DateTime|null Returns the per paie.
     */
    public function getPerPaie() {
        return $this->perPaie;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode deb corr.
     *
     * @return DateTime|null Returns the periode deb corr.
     */
    public function getPeriodeDebCorr() {
        return $this->periodeDebCorr;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the periode fin corr.
     *
     * @return DateTime|null Returns the periode fin corr.
     */
    public function getPeriodeFinCorr() {
        return $this->periodeFinCorr;
    }

    /**
     * Get the transfert abs.
     *
     * @return bool Returns the transfert abs.
     */
    public function getTransfertAbs() {
        return $this->transfertAbs;
    }

    /**
     * Get the type abs cp.
     *
     * @return string Returns the type abs cp.
     */
    public function getTypeAbsCp() {
        return $this->typeAbsCp;
    }

    /**
     * Get the type abs cp corr.
     *
     * @return string Returns the type abs cp corr.
     */
    public function getTypeAbsCpCorr() {
        return $this->typeAbsCpCorr;
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
     * Set the id.
     *
     * @param string $id The id.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nbh sais.
     *
     * @param float $nbhSais The nbh sais.
     */
    public function setNbhSais($nbhSais) {
        $this->nbhSais = $nbhSais;
        return $this;
    }

    /**
     * Set the nbh sais corr.
     *
     * @param float $nbhSaisCorr The nbh sais corr.
     */
    public function setNbhSaisCorr($nbhSaisCorr) {
        $this->nbhSaisCorr = $nbhSaisCorr;
        return $this;
    }

    /**
     * Set the nbj sais.
     *
     * @param float $nbjSais The nbj sais.
     */
    public function setNbjSais($nbjSais) {
        $this->nbjSais = $nbjSais;
        return $this;
    }

    /**
     * Set the nbj sais corr.
     *
     * @param float $nbjSaisCorr The nbj sais corr.
     */
    public function setNbjSaisCorr($nbjSaisCorr) {
        $this->nbjSaisCorr = $nbjSaisCorr;
        return $this;
    }

    /**
     * Set the num evenement.
     *
     * @param int $numEvenement The num evenement.
     */
    public function setNumEvenement($numEvenement) {
        $this->numEvenement = $numEvenement;
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
     * Set the per paie.
     *
     * @param DateTime|null $perPaie The per paie.
     */
    public function setPerPaie(DateTime $perPaie = null) {
        $this->perPaie = $perPaie;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode deb corr.
     *
     * @param DateTime|null $periodeDebCorr The periode deb corr.
     */
    public function setPeriodeDebCorr(DateTime $periodeDebCorr = null) {
        $this->periodeDebCorr = $periodeDebCorr;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the periode fin corr.
     *
     * @param DateTime|null $periodeFinCorr The periode fin corr.
     */
    public function setPeriodeFinCorr(DateTime $periodeFinCorr = null) {
        $this->periodeFinCorr = $periodeFinCorr;
        return $this;
    }

    /**
     * Set the transfert abs.
     *
     * @param bool $transfertAbs The transfert abs.
     */
    public function setTransfertAbs($transfertAbs) {
        $this->transfertAbs = $transfertAbs;
        return $this;
    }

    /**
     * Set the type abs cp.
     *
     * @param string $typeAbsCp The type abs cp.
     */
    public function setTypeAbsCp($typeAbsCp) {
        $this->typeAbsCp = $typeAbsCp;
        return $this;
    }

    /**
     * Set the type abs cp corr.
     *
     * @param string $typeAbsCpCorr The type abs cp corr.
     */
    public function setTypeAbsCpCorr($typeAbsCpCorr) {
        $this->typeAbsCpCorr = $typeAbsCpCorr;
        return $this;
    }
}
