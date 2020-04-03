<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Enchainement semaines.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EnchainementSemaines {

    /**
     * Discr sem.
     *
     * @var int
     */
    private $discrSem;

    /**
     * Num ordre.
     *
     * @var int
     */
    private $numOrdre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the discr sem.
     *
     * @return int Returns the discr sem.
     */
    public function getDiscrSem() {
        return $this->discrSem;
    }

    /**
     * Get the num ordre.
     *
     * @return int Returns the num ordre.
     */
    public function getNumOrdre() {
        return $this->numOrdre;
    }

    /**
     * Set the discr sem.
     *
     * @param int $discrSem The discr sem.
     * @return EnchainementSemaines Returns this Enchainement semaines.
     */
    public function setDiscrSem($discrSem) {
        $this->discrSem = $discrSem;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int $numOrdre The num ordre.
     * @return EnchainementSemaines Returns this Enchainement semaines.
     */
    public function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
