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
 * z4216 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz4216Trait {

    /**
     * z4216.
     *
     * @var float
     */
    private $z4216;

    /**
     * Get the z4216.
     *
     * @return float Returns the z4216.
     */
    public function getz4216() {
        return $this->z4216;
    }

    /**
     * Set the z4216.
     *
     * @param float $z4216 The z4216.
     */
    public function setz4216($z4216) {
        $this->z4216 = $z4216;
        return $this;
    }
}
