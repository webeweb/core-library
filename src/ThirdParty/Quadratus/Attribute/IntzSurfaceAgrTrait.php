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
 * z surface agr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntzSurfaceAgrTrait {

    /**
     * z surface agr.
     *
     * @var int
     */
    private $zSurfaceAgr;

    /**
     * Get the z surface agr.
     *
     * @return int Returns the z surface agr.
     */
    public function getzSurfaceAgr() {
        return $this->zSurfaceAgr;
    }

    /**
     * Set the z surface agr.
     *
     * @param int $zSurfaceAgr The z surface agr.
     */
    public function setzSurfaceAgr($zSurfaceAgr) {
        $this->zSurfaceAgr = $zSurfaceAgr;
        return $this;
    }
}
