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
 * Cum net impos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumNetImposTrait {

    /**
     * Cum net impos.
     *
     * @var float
     */
    private $cumNetImpos;

    /**
     * Get the cum net impos.
     *
     * @return float Returns the cum net impos.
     */
    public function getCumNetImpos() {
        return $this->cumNetImpos;
    }

    /**
     * Set the cum net impos.
     *
     * @param float $cumNetImpos The cum net impos.
     */
    public function setCumNetImpos($cumNetImpos) {
        $this->cumNetImpos = $cumNetImpos;
        return $this;
    }
}
