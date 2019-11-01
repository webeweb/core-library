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
 * Hc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHcTrait {

    /**
     * Hc.
     *
     * @var float
     */
    private $hc;

    /**
     * Get the hc.
     *
     * @return float Returns the hc.
     */
    public function getHc() {
        return $this->hc;
    }

    /**
     * Set the hc.
     *
     * @param float $hc The hc.
     */
    public function setHc($hc) {
        $this->hc = $hc;
        return $this;
    }
}
