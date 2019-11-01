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
 * Police3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPolice3Trait {

    /**
     * Police3.
     *
     * @var string
     */
    private $police3;

    /**
     * Get the police3.
     *
     * @return string Returns the police3.
     */
    public function getPolice3() {
        return $this->police3;
    }

    /**
     * Set the police3.
     *
     * @param string $police3 The police3.
     */
    public function setPolice3($police3) {
        $this->police3 = $police3;
        return $this;
    }
}
