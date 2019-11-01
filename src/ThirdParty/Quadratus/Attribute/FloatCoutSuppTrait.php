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
 * Cout supp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoutSuppTrait {

    /**
     * Cout supp.
     *
     * @var float
     */
    private $coutSupp;

    /**
     * Get the cout supp.
     *
     * @return float Returns the cout supp.
     */
    public function getCoutSupp() {
        return $this->coutSupp;
    }

    /**
     * Set the cout supp.
     *
     * @param float $coutSupp The cout supp.
     */
    public function setCoutSupp($coutSupp) {
        $this->coutSupp = $coutSupp;
        return $this;
    }
}
