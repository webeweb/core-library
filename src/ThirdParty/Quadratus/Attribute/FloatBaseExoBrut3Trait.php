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
 * Base exo brut3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseExoBrut3Trait {

    /**
     * Base exo brut3.
     *
     * @var float
     */
    private $baseExoBrut3;

    /**
     * Get the base exo brut3.
     *
     * @return float Returns the base exo brut3.
     */
    public function getBaseExoBrut3() {
        return $this->baseExoBrut3;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float $baseExoBrut3 The base exo brut3.
     */
    public function setBaseExoBrut3($baseExoBrut3) {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }
}
