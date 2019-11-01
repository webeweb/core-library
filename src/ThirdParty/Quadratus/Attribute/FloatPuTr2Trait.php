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
 * Pu tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuTr2Trait {

    /**
     * Pu tr2.
     *
     * @var float
     */
    private $puTr2;

    /**
     * Get the pu tr2.
     *
     * @return float Returns the pu tr2.
     */
    public function getPuTr2() {
        return $this->puTr2;
    }

    /**
     * Set the pu tr2.
     *
     * @param float $puTr2 The pu tr2.
     */
    public function setPuTr2($puTr2) {
        $this->puTr2 = $puTr2;
        return $this;
    }
}
