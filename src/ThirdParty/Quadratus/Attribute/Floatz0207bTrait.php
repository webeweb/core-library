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
 * z0207b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0207bTrait {

    /**
     * z0207b.
     *
     * @var float
     */
    private $z0207b;

    /**
     * Get the z0207b.
     *
     * @return float Returns the z0207b.
     */
    public function getz0207b() {
        return $this->z0207b;
    }

    /**
     * Set the z0207b.
     *
     * @param float $z0207b The z0207b.
     */
    public function setz0207b($z0207b) {
        $this->z0207b = $z0207b;
        return $this;
    }
}
