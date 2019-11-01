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
 * Z9991 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ9991Trait {

    /**
     * Z9991.
     *
     * @var float
     */
    private $z9991;

    /**
     * Get the z9991.
     *
     * @return float Returns the z9991.
     */
    public function getZ9991() {
        return $this->z9991;
    }

    /**
     * Set the z9991.
     *
     * @param float $z9991 The z9991.
     */
    public function setZ9991($z9991) {
        $this->z9991 = $z9991;
        return $this;
    }
}
