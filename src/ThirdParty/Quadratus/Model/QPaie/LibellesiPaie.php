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
 * Libellesi paie.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LibellesiPaie {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule specifi paie.
     *
     * @var bool
     */
    private $intituleSpecifiPaie;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Visiblei paie.
     *
     * @var string
     */
    private $visibleiPaie;

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
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the intitule specifi paie.
     *
     * @return bool Returns the intitule specifi paie.
     */
    public function getIntituleSpecifiPaie() {
        return $this->intituleSpecifiPaie;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the visiblei paie.
     *
     * @return string Returns the visiblei paie.
     */
    public function getVisibleiPaie() {
        return $this->visibleiPaie;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule specifi paie.
     *
     * @param bool $intituleSpecifiPaie The intitule specifi paie.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setIntituleSpecifiPaie($intituleSpecifiPaie) {
        $this->intituleSpecifiPaie = $intituleSpecifiPaie;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the visiblei paie.
     *
     * @param string $visibleiPaie The visiblei paie.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setVisibleiPaie($visibleiPaie) {
        $this->visibleiPaie = $visibleiPaie;
        return $this;
    }
}
