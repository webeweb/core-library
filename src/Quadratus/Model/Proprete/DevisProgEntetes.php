<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

/**
 * Devis prog entetes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class DevisProgEntetes {

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Num programme.
     *
     * @var int
     */
    private $numProgramme;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
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
     * Get the num programme.
     *
     * @return int Returns the num programme.
     */
    public function getNumProgramme() {
        return $this->numProgramme;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return DevisProgEntetes Returns this devis prog entetes.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     * @return DevisProgEntetes Returns this devis prog entetes.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int $numProgramme The num programme.
     * @return DevisProgEntetes Returns this devis prog entetes.
     */
    public function setNumProgramme($numProgramme) {
        $this->numProgramme = $numProgramme;
        return $this;
    }

}
