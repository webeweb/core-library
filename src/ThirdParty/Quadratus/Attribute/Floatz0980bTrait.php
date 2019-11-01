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
 * z0980b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0980bTrait {

    /**
     * z0980b.
     *
     * @var float
     */
    private $z0980b;

    /**
     * Get the z0980b.
     *
     * @return float Returns the z0980b.
     */
    public function getz0980b() {
        return $this->z0980b;
    }

    /**
     * Set the z0980b.
     *
     * @param float $z0980b The z0980b.
     */
    public function setz0980b($z0980b) {
        $this->z0980b = $z0980b;
        return $this;
    }
}
