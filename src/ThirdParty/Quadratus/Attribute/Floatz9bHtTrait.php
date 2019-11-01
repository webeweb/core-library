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
 * z9b ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz9bHtTrait {

    /**
     * z9b ht.
     *
     * @var float
     */
    private $z9bHt;

    /**
     * Get the z9b ht.
     *
     * @return float Returns the z9b ht.
     */
    public function getz9bHt() {
        return $this->z9bHt;
    }

    /**
     * Set the z9b ht.
     *
     * @param float $z9bHt The z9b ht.
     */
    public function setz9bHt($z9bHt) {
        $this->z9bHt = $z9bHt;
        return $this;
    }
}
