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
 * Z0920b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ0920bTrait {

    /**
     * Z0920b.
     *
     * @var float
     */
    private $z0920b;

    /**
     * Get the z0920b.
     *
     * @return float Returns the z0920b.
     */
    public function getZ0920b() {
        return $this->z0920b;
    }

    /**
     * Set the z0920b.
     *
     * @param float $z0920b The z0920b.
     */
    public function setZ0920b($z0920b) {
        $this->z0920b = $z0920b;
        return $this;
    }
}
