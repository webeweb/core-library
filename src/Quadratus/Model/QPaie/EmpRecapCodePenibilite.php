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

/**
 * Emp recap code penibilite model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpRecapCodePenibilite {

    /**
     * Code penibilite.
     *
     * @var string
     */
    private $codePenibilite;

    /**
     * I d recap.
     *
     * @var int
     */
    private $iDRecap;

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
     * Get the i d recap.
     *
     * @return int Returns the i d recap.
     */
    public function getIDRecap() {
        return $this->iDRecap;
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
     * @return EmpRecapCodePenibilite Returns this emp recap code penibilite.
     */
    public function setCodePenibilite($codePenibilite) {
        $this->codePenibilite = $codePenibilite;
        return $this;
    }

    /**
     * Set the i d recap.
     *
     * @param int $iDRecap The i d recap.
     * @return EmpRecapCodePenibilite Returns this emp recap code penibilite.
     */
    public function setIDRecap($iDRecap) {
        $this->iDRecap = $iDRecap;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpRecapCodePenibilite Returns this emp recap code penibilite.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

}
