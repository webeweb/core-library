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
 * Base exo plaf3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseExoPlaf3Trait {

    /**
     * Base exo plaf3.
     *
     * @var float
     */
    private $baseExoPlaf3;

    /**
     * Get the base exo plaf3.
     *
     * @return float Returns the base exo plaf3.
     */
    public function getBaseExoPlaf3() {
        return $this->baseExoPlaf3;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float $baseExoPlaf3 The base exo plaf3.
     */
    public function setBaseExoPlaf3($baseExoPlaf3) {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }
}
