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
 * Shb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatShbTrait {

    /**
     * Shb.
     *
     * @var float
     */
    private $shb;

    /**
     * Get the shb.
     *
     * @return float Returns the shb.
     */
    public function getShb() {
        return $this->shb;
    }

    /**
     * Set the shb.
     *
     * @param float $shb The shb.
     */
    public function setShb($shb) {
        $this->shb = $shb;
        return $this;
    }
}
