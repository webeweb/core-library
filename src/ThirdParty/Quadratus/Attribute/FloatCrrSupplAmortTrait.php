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
 * Crr suppl amort trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCrrSupplAmortTrait {

    /**
     * Crr suppl amort.
     *
     * @var float
     */
    private $crrSupplAmort;

    /**
     * Get the crr suppl amort.
     *
     * @return float Returns the crr suppl amort.
     */
    public function getCrrSupplAmort() {
        return $this->crrSupplAmort;
    }

    /**
     * Set the crr suppl amort.
     *
     * @param float $crrSupplAmort The crr suppl amort.
     */
    public function setCrrSupplAmort($crrSupplAmort) {
        $this->crrSupplAmort = $crrSupplAmort;
        return $this;
    }
}
