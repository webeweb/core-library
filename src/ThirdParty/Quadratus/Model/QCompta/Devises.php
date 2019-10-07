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
 * Devises model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Devises {

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Taux.
     *
     * @var float
     */
    private $taux;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the taux.
     *
     * @return float Returns the taux.
     */
    public function getTaux() {
        return $this->taux;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Devises Returns this devises.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime $date The date.
     * @return Devises Returns this devises.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     * @return Devises Returns this devises.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }
}
