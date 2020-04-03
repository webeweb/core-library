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

/**
 * Libelles auto.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class LibellesAuto {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Suivi date echeance.
     *
     * @var bool
     */
    private $suiviDateEcheance;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
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
     * Get the suivi date echeance.
     *
     * @return bool Returns the suivi date echeance.
     */
    public function getSuiviDateEcheance() {
        return $this->suiviDateEcheance;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return LibellesAuto Returns this Libelles auto.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return LibellesAuto Returns this Libelles auto.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the suivi date echeance.
     *
     * @param bool $suiviDateEcheance The suivi date echeance.
     * @return LibellesAuto Returns this Libelles auto.
     */
    public function setSuiviDateEcheance($suiviDateEcheance) {
        $this->suiviDateEcheance = $suiviDateEcheance;
        return $this;
    }
}
