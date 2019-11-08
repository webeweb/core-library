<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Coeff amortissement.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CoeffAmortissement {

    /**
     * Coeff.
     *
     * @var float
     */
    private $coeff;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Duree.
     *
     * @var int
     */
    private $duree;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the coeff.
     *
     * @return float Returns the coeff.
     */
    public function getCoeff() {
        return $this->coeff;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the duree.
     *
     * @return int Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Set the coeff.
     *
     * @param float $coeff The coeff.
     */
    public function setCoeff($coeff) {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param int $duree The duree.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }
}
