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
 * Z0702b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0702bTrait {

    /**
     * Z0702b.
     *
     * @var float
     */
    private $z0702b;

    /**
     * Get the z0702b.
     *
     * @return float Returns the z0702b.
     */
    public function getZ0702b() {
        return $this->z0702b;
    }

    /**
     * Set the z0702b.
     *
     * @param float $z0702b The z0702b.
     */
    public function setZ0702b($z0702b) {
        $this->z0702b = $z0702b;
        return $this;
    }
}
