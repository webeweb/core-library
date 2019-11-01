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
 * Base exo brut2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseExoBrut2Trait {

    /**
     * Base exo brut2.
     *
     * @var float
     */
    private $baseExoBrut2;

    /**
     * Get the base exo brut2.
     *
     * @return float Returns the base exo brut2.
     */
    public function getBaseExoBrut2() {
        return $this->baseExoBrut2;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float $baseExoBrut2 The base exo brut2.
     */
    public function setBaseExoBrut2($baseExoBrut2) {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }
}
