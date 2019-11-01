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
 * Az38ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz38htTrait {

    /**
     * Az38ht.
     *
     * @var float
     */
    private $az38ht;

    /**
     * Get the az38ht.
     *
     * @return float Returns the az38ht.
     */
    public function getAz38ht() {
        return $this->az38ht;
    }

    /**
     * Set the az38ht.
     *
     * @param float $az38ht The az38ht.
     */
    public function setAz38ht($az38ht) {
        $this->az38ht = $az38ht;
        return $this;
    }
}
