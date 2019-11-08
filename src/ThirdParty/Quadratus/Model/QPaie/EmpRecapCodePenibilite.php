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

/**
 * Emp recap code penibilite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCodePenibilite {

    /**
     * Code penibilite.
     *
     * @var string
     */
    private $codePenibilite;

    /**
     * Id recap.
     *
     * @var int
     */
    private $idRecap;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code penibilite.
     *
     * @return string Returns the code penibilite.
     */
    public function getCodePenibilite() {
        return $this->codePenibilite;
    }

    /**
     * Get the id recap.
     *
     * @return int Returns the id recap.
     */
    public function getIdRecap() {
        return $this->idRecap;
    }

    /**
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Set the code penibilite.
     *
     * @param string $codePenibilite The code penibilite.
     */
    public function setCodePenibilite($codePenibilite) {
        $this->codePenibilite = $codePenibilite;
        return $this;
    }

    /**
     * Set the id recap.
     *
     * @param int $idRecap The id recap.
     */
    public function setIdRecap($idRecap) {
        $this->idRecap = $idRecap;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }
}
