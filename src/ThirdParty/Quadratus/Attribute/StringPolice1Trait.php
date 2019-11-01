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
 * Police1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPolice1Trait {

    /**
     * Police1.
     *
     * @var string
     */
    private $police1;

    /**
     * Get the police1.
     *
     * @return string Returns the police1.
     */
    public function getPolice1() {
        return $this->police1;
    }

    /**
     * Set the police1.
     *
     * @param string $police1 The police1.
     */
    public function setPolice1($police1) {
        $this->police1 = $police1;
        return $this;
    }
}
