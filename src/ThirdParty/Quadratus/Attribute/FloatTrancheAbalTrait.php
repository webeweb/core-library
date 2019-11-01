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
 * Tranche abal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheAbalTrait {

    /**
     * Tranche abal.
     *
     * @var float
     */
    private $trancheAbal;

    /**
     * Get the tranche abal.
     *
     * @return float Returns the tranche abal.
     */
    public function getTrancheAbal() {
        return $this->trancheAbal;
    }

    /**
     * Set the tranche abal.
     *
     * @param float $trancheAbal The tranche abal.
     */
    public function setTrancheAbal($trancheAbal) {
        $this->trancheAbal = $trancheAbal;
        return $this;
    }
}
