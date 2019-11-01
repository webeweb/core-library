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
 * z12 ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz12HtTrait {

    /**
     * z12 ht.
     *
     * @var float
     */
    private $z12Ht;

    /**
     * Get the z12 ht.
     *
     * @return float Returns the z12 ht.
     */
    public function getz12Ht() {
        return $this->z12Ht;
    }

    /**
     * Set the z12 ht.
     *
     * @param float $z12Ht The z12 ht.
     */
    public function setz12Ht($z12Ht) {
        $this->z12Ht = $z12Ht;
        return $this;
    }
}
