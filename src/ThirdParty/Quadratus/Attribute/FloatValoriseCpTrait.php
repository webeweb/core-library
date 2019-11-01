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
 * Valorise cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValoriseCpTrait {

    /**
     * Valorise cp.
     *
     * @var float
     */
    private $valoriseCp;

    /**
     * Get the valorise cp.
     *
     * @return float Returns the valorise cp.
     */
    public function getValoriseCp() {
        return $this->valoriseCp;
    }

    /**
     * Set the valorise cp.
     *
     * @param float $valoriseCp The valorise cp.
     */
    public function setValoriseCp($valoriseCp) {
        $this->valoriseCp = $valoriseCp;
        return $this;
    }
}
