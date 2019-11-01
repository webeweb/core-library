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
 * Exp biens total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExpBiensTotalTrait {

    /**
     * Exp biens total.
     *
     * @var float
     */
    private $expBiensTotal;

    /**
     * Get the exp biens total.
     *
     * @return float Returns the exp biens total.
     */
    public function getExpBiensTotal() {
        return $this->expBiensTotal;
    }

    /**
     * Set the exp biens total.
     *
     * @param float $expBiensTotal The exp biens total.
     */
    public function setExpBiensTotal($expBiensTotal) {
        $this->expBiensTotal = $expBiensTotal;
        return $this;
    }
}
