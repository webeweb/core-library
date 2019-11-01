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
 * Cum brut non abattu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutNonAbattuTrait {

    /**
     * Cum brut non abattu.
     *
     * @var float
     */
    private $cumBrutNonAbattu;

    /**
     * Get the cum brut non abattu.
     *
     * @return float Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu() {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float $cumBrutNonAbattu The cum brut non abattu.
     */
    public function setCumBrutNonAbattu($cumBrutNonAbattu) {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }
}
