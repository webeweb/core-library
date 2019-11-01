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
 * Ftiscice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFtisciceTrait {

    /**
     * Ftiscice.
     *
     * @var float
     */
    private $ftiscice;

    /**
     * Get the ftiscice.
     *
     * @return float Returns the ftiscice.
     */
    public function getFtiscice() {
        return $this->ftiscice;
    }

    /**
     * Set the ftiscice.
     *
     * @param float $ftiscice The ftiscice.
     */
    public function setFtiscice($ftiscice) {
        $this->ftiscice = $ftiscice;
        return $this;
    }
}
