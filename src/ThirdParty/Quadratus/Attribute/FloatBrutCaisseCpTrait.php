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
 * Brut caisse cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutCaisseCpTrait {

    /**
     * Brut caisse cp.
     *
     * @var float
     */
    private $brutCaisseCp;

    /**
     * Get the brut caisse cp.
     *
     * @return float Returns the brut caisse cp.
     */
    public function getBrutCaisseCp() {
        return $this->brutCaisseCp;
    }

    /**
     * Set the brut caisse cp.
     *
     * @param float $brutCaisseCp The brut caisse cp.
     */
    public function setBrutCaisseCp($brutCaisseCp) {
        $this->brutCaisseCp = $brutCaisseCp;
        return $this;
    }
}
