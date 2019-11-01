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
 * Z02 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ02Trait {

    /**
     * Z02.
     *
     * @var float
     */
    private $z02;

    /**
     * Get the z02.
     *
     * @return float Returns the z02.
     */
    public function getZ02() {
        return $this->z02;
    }

    /**
     * Set the z02.
     *
     * @param float $z02 The z02.
     */
    public function setZ02($z02) {
        $this->z02 = $z02;
        return $this;
    }
}
