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
 * Surface trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSurfaceTrait {

    /**
     * Surface.
     *
     * @var float
     */
    private $surface;

    /**
     * Get the surface.
     *
     * @return float Returns the surface.
     */
    public function getSurface() {
        return $this->surface;
    }

    /**
     * Set the surface.
     *
     * @param float $surface The surface.
     */
    public function setSurface($surface) {
        $this->surface = $surface;
        return $this;
    }
}
