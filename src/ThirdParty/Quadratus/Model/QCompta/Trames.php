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


/**
 * Trames model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Trames {

    /**
     * Code.
     *
     * @var int
     */
    private $code;

    /**
     * Garde montants.
     *
     * @var bool
     */
    private $gardeMontants;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the garde montants.
     *
     * @return bool Returns the garde montants.
     */
    public function getGardeMontants() {
        return $this->gardeMontants;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set the code.
     *
     * @param int $code The code.
     * @return Trames Returns this trames.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the garde montants.
     *
     * @param bool $gardeMontants The garde montants.
     * @return Trames Returns this trames.
     */
    public function setGardeMontants($gardeMontants) {
        $this->gardeMontants = $gardeMontants;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Trames Returns this trames.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }
}
