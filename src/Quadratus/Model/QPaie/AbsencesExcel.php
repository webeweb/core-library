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
 * Absences excel model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class AbsencesExcel {

    /**
     * I d.
     *
     * @var int
     */
    private $iD;

    /**
     * Nbh sais.
     *
     * @var float
     */
    private $nbhSais;

    /**
     * Nbj sais.
     *
     * @var float
     */
    private $nbjSais;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode deb.
     *
     * @var DateTime
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime
     */
    private $periodeFin;

    /**
     * Type abs cp.
     *
     * @var string
     */
    private $typeAbsCp;

    /**
     * Type import.
     *
     * @var int
     */
    private $typeImport;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the i d.
     *
     * @return int Returns the i d.
     */
    public function getID() {
        return $this->iD;
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
     * Get the nbj sais.
     *
     * @return float Returns the nbj sais.
     */
    public function getNbjSais() {
        return $this->nbjSais;
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
     * Get the periode deb.
     *
     * @return DateTime Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
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
     * Get the type import.
     *
     * @return int Returns the type import.
     */
    public function getTypeImport() {
        return $this->typeImport;
    }

    /**
     * Set the i d.
     *
     * @param int $iD The i d.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setID($iD) {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Set the nbh sais.
     *
     * @param float $nbhSais The nbh sais.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setNbhSais($nbhSais) {
        $this->nbhSais = $nbhSais;
        return $this;
    }

    /**
     * Set the nbj sais.
     *
     * @param float $nbjSais The nbj sais.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setNbjSais($nbjSais) {
        $this->nbjSais = $nbjSais;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type abs cp.
     *
     * @param string $typeAbsCp The type abs cp.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setTypeAbsCp($typeAbsCp) {
        $this->typeAbsCp = $typeAbsCp;
        return $this;
    }

    /**
     * Set the type import.
     *
     * @param int $typeImport The type import.
     * @return AbsencesExcel Returns this absences excel.
     */
    public function setTypeImport($typeImport) {
        $this->typeImport = $typeImport;
        return $this;
    }

}
