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
 * Repartition activite bul horaire.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RepartitionActiviteBulHoraire {

    /**
     * Code service.
     *
     * @var string
     */
    private $codeService;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Interimaire.
     *
     * @var bool
     */
    private $interimaire;

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code service.
     *
     * @return string Returns the code service.
     */
    public function getCodeService() {
        return $this->codeService;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the interimaire.
     *
     * @return bool Returns the interimaire.
     */
    public function getInterimaire() {
        return $this->interimaire;
    }

    /**
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
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
     * Set the code service.
     *
     * @param string $codeService The code service.
     */
    public function setCodeService($codeService) {
        $this->codeService = $codeService;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the interimaire.
     *
     * @param bool $interimaire The interimaire.
     */
    public function setInterimaire($interimaire) {
        $this->interimaire = $interimaire;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
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
}
