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
 * z7b ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz7bHtTrait {

    /**
     * z7b ht.
     *
     * @var float
     */
    private $z7bHt;

    /**
     * Get the z7b ht.
     *
     * @return float Returns the z7b ht.
     */
    public function getz7bHt() {
        return $this->z7bHt;
    }

    /**
     * Set the z7b ht.
     *
     * @param float $z7bHt The z7b ht.
     */
    public function setz7bHt($z7bHt) {
        $this->z7bHt = $z7bHt;
        return $this;
    }
}
