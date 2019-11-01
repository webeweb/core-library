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
 * z0981b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0981bTrait {

    /**
     * z0981b.
     *
     * @var float
     */
    private $z0981b;

    /**
     * Get the z0981b.
     *
     * @return float Returns the z0981b.
     */
    public function getz0981b() {
        return $this->z0981b;
    }

    /**
     * Set the z0981b.
     *
     * @param float $z0981b The z0981b.
     */
    public function setz0981b($z0981b) {
        $this->z0981b = $z0981b;
        return $this;
    }
}
