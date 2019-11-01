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
 * Pu tr4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuTr4Trait {

    /**
     * Pu tr4.
     *
     * @var float
     */
    private $puTr4;

    /**
     * Get the pu tr4.
     *
     * @return float Returns the pu tr4.
     */
    public function getPuTr4() {
        return $this->puTr4;
    }

    /**
     * Set the pu tr4.
     *
     * @param float $puTr4 The pu tr4.
     */
    public function setPuTr4($puTr4) {
        $this->puTr4 = $puTr4;
        return $this;
    }
}
