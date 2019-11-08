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
 * Bord prep absences.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class BordPrepAbsences {

    /**
     * Id.
     *
     * @var int
     */
    private $id;

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
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Type abs cp.
     *
     * @var string
     */
    private $typeAbsCp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the id.
     *
     * @return int Returns the id.
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
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
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
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
     * Set the id.
     *
     * @param int $id The id.
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
     * Set the nbj sais.
     *
     * @param float $nbjSais The nbj sais.
     */
    public function setNbjSais($nbjSais) {
        $this->nbjSais = $nbjSais;
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
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
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
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
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
}
