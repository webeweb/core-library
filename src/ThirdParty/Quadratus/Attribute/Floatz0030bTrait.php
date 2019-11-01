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
 * z0030b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Floatz0030bTrait {

    /**
     * z0030b.
     *
     * @var float
     */
    private $z0030b;

    /**
     * Get the z0030b.
     *
     * @return float Returns the z0030b.
     */
    public function getz0030b() {
        return $this->z0030b;
    }

    /**
     * Set the z0030b.
     *
     * @param float $z0030b The z0030b.
     */
    public function setz0030b($z0030b) {
        $this->z0030b = $z0030b;
        return $this;
    }
}
