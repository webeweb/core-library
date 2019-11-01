<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Num ordre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumOrdreTrait {

    /**
     * Num ordre.
     *
     * @var int
     */
    private $numOrdre;

    /**
     * Get the num ordre.
     *
     * @return int Returns the num ordre.
     */
    public function getNumOrdre() {
        return $this->numOrdre;
    }

    /**
     * Set the num ordre.
     *
     * @param int $numOrdre The num ordre.
     */
    public function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
