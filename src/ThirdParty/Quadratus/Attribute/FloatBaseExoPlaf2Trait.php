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
 * Base exo plaf2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseExoPlaf2Trait {

    /**
     * Base exo plaf2.
     *
     * @var float
     */
    private $baseExoPlaf2;

    /**
     * Get the base exo plaf2.
     *
     * @return float Returns the base exo plaf2.
     */
    public function getBaseExoPlaf2() {
        return $this->baseExoPlaf2;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float $baseExoPlaf2 The base exo plaf2.
     */
    public function setBaseExoPlaf2($baseExoPlaf2) {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }
}
