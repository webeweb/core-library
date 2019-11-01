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
 * Capital trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCapitalTrait {

    /**
     * Capital.
     *
     * @var float
     */
    private $capital;

    /**
     * Get the capital.
     *
     * @return float Returns the capital.
     */
    public function getCapital() {
        return $this->capital;
    }

    /**
     * Set the capital.
     *
     * @param float $capital The capital.
     */
    public function setCapital($capital) {
        $this->capital = $capital;
        return $this;
    }
}
