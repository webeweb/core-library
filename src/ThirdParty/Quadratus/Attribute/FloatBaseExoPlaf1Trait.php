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
 * Base exo plaf1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseExoPlaf1Trait {

    /**
     * Base exo plaf1.
     *
     * @var float
     */
    private $baseExoPlaf1;

    /**
     * Get the base exo plaf1.
     *
     * @return float Returns the base exo plaf1.
     */
    public function getBaseExoPlaf1() {
        return $this->baseExoPlaf1;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float $baseExoPlaf1 The base exo plaf1.
     */
    public function setBaseExoPlaf1($baseExoPlaf1) {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }
}
