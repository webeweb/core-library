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
 * Base prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBasePrevTrait {

    /**
     * Base prev.
     *
     * @var float
     */
    private $basePrev;

    /**
     * Get the base prev.
     *
     * @return float Returns the base prev.
     */
    public function getBasePrev() {
        return $this->basePrev;
    }

    /**
     * Set the base prev.
     *
     * @param float $basePrev The base prev.
     */
    public function setBasePrev($basePrev) {
        $this->basePrev = $basePrev;
        return $this;
    }
}
