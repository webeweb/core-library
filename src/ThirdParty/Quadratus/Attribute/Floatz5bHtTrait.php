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
 * z5b ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz5bHtTrait {

    /**
     * z5b ht.
     *
     * @var float
     */
    private $z5bHt;

    /**
     * Get the z5b ht.
     *
     * @return float Returns the z5b ht.
     */
    public function getz5bHt() {
        return $this->z5bHt;
    }

    /**
     * Set the z5b ht.
     *
     * @param float $z5bHt The z5b ht.
     */
    public function setz5bHt($z5bHt) {
        $this->z5bHt = $z5bHt;
        return $this;
    }
}
