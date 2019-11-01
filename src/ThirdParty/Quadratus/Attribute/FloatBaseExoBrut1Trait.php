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
 * Base exo brut1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseExoBrut1Trait {

    /**
     * Base exo brut1.
     *
     * @var float
     */
    private $baseExoBrut1;

    /**
     * Get the base exo brut1.
     *
     * @return float Returns the base exo brut1.
     */
    public function getBaseExoBrut1() {
        return $this->baseExoBrut1;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float $baseExoBrut1 The base exo brut1.
     */
    public function setBaseExoBrut1($baseExoBrut1) {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }
}
