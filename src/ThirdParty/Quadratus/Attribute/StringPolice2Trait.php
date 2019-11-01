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
 * Police2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPolice2Trait {

    /**
     * Police2.
     *
     * @var string
     */
    private $police2;

    /**
     * Get the police2.
     *
     * @return string Returns the police2.
     */
    public function getPolice2() {
        return $this->police2;
    }

    /**
     * Set the police2.
     *
     * @param string $police2 The police2.
     */
    public function setPolice2($police2) {
        $this->police2 = $police2;
        return $this;
    }
}
