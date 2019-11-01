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
 * Pu tr5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuTr5Trait {

    /**
     * Pu tr5.
     *
     * @var float
     */
    private $puTr5;

    /**
     * Get the pu tr5.
     *
     * @return float Returns the pu tr5.
     */
    public function getPuTr5() {
        return $this->puTr5;
    }

    /**
     * Set the pu tr5.
     *
     * @param float $puTr5 The pu tr5.
     */
    public function setPuTr5($puTr5) {
        $this->puTr5 = $puTr5;
        return $this;
    }
}
