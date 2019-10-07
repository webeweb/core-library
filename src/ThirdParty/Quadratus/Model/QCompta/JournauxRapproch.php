<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Journaux rapproch model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class JournauxRapproch {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Methode.
     *
     * @var string
     */
    private $methode;

    /**
     * Ne pas saisir solde fin.
     *
     * @var bool
     */
    private $nePasSaisirSoldeFin;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Solde fin.
     *
     * @var float
     */
    private $soldeFin;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
    }

    /**
     * Get the methode.
     *
     * @return string Returns the methode.
     */
    public function getMethode() {
        return $this->methode;
    }

    /**
     * Get the ne pas saisir solde fin.
     *
     * @return bool Returns the ne pas saisir solde fin.
     */
    public function getNePasSaisirSoldeFin() {
        return $this->nePasSaisirSoldeFin;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the solde fin.
     *
     * @return float Returns the solde fin.
     */
    public function getSoldeFin() {
        return $this->soldeFin;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return JournauxRapproch Returns this journaux rapproch.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the methode.
     *
     * @param string $methode The methode.
     * @return JournauxRapproch Returns this journaux rapproch.
     */
    public function setMethode($methode) {
        $this->methode = $methode;
        return $this;
    }

    /**
     * Set the ne pas saisir solde fin.
     *
     * @param bool $nePasSaisirSoldeFin The ne pas saisir solde fin.
     * @return JournauxRapproch Returns this journaux rapproch.
     */
    public function setNePasSaisirSoldeFin($nePasSaisirSoldeFin) {
        $this->nePasSaisirSoldeFin = $nePasSaisirSoldeFin;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return JournauxRapproch Returns this journaux rapproch.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the solde fin.
     *
     * @param float $soldeFin The solde fin.
     * @return JournauxRapproch Returns this journaux rapproch.
     */
    public function setSoldeFin($soldeFin) {
        $this->soldeFin = $soldeFin;
        return $this;
    }
}
