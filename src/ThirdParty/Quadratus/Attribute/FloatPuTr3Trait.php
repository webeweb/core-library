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
 * Pu tr3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuTr3Trait {

    /**
     * Pu tr3.
     *
     * @var float
     */
    private $puTr3;

    /**
     * Get the pu tr3.
     *
     * @return float Returns the pu tr3.
     */
    public function getPuTr3() {
        return $this->puTr3;
    }

    /**
     * Set the pu tr3.
     *
     * @param float $puTr3 The pu tr3.
     */
    public function setPuTr3($puTr3) {
        $this->puTr3 = $puTr3;
        return $this;
    }
}
