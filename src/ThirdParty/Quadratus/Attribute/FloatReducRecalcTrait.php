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
 * Reduc recalc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatReducRecalcTrait {

    /**
     * Reduc recalc.
     *
     * @var float
     */
    private $reducRecalc;

    /**
     * Get the reduc recalc.
     *
     * @return float Returns the reduc recalc.
     */
    public function getReducRecalc() {
        return $this->reducRecalc;
    }

    /**
     * Set the reduc recalc.
     *
     * @param float $reducRecalc The reduc recalc.
     */
    public function setReducRecalc($reducRecalc) {
        $this->reducRecalc = $reducRecalc;
        return $this;
    }
}
