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
 * Cum impos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumImposTrait {

    /**
     * Cum impos.
     *
     * @var float
     */
    private $cumImpos;

    /**
     * Get the cum impos.
     *
     * @return float Returns the cum impos.
     */
    public function getCumImpos() {
        return $this->cumImpos;
    }

    /**
     * Set the cum impos.
     *
     * @param float $cumImpos The cum impos.
     */
    public function setCumImpos($cumImpos) {
        $this->cumImpos = $cumImpos;
        return $this;
    }
}
