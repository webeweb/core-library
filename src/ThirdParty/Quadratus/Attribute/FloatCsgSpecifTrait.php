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
 * Csg specif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCsgSpecifTrait {

    /**
     * Csg specif.
     *
     * @var float
     */
    private $csgSpecif;

    /**
     * Get the csg specif.
     *
     * @return float Returns the csg specif.
     */
    public function getCsgSpecif() {
        return $this->csgSpecif;
    }

    /**
     * Set the csg specif.
     *
     * @param float $csgSpecif The csg specif.
     */
    public function setCsgSpecif($csgSpecif) {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }
}
