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
 * Cout km trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoutKmTrait {

    /**
     * Cout km.
     *
     * @var float
     */
    private $coutKm;

    /**
     * Get the cout km.
     *
     * @return float Returns the cout km.
     */
    public function getCoutKm() {
        return $this->coutKm;
    }

    /**
     * Set the cout km.
     *
     * @param float $coutKm The cout km.
     */
    public function setCoutKm($coutKm) {
        $this->coutKm = $coutKm;
        return $this;
    }
}
