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
 * Prct phase trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrctPhaseTrait {

    /**
     * Prct phase.
     *
     * @var float
     */
    private $prctPhase;

    /**
     * Get the prct phase.
     *
     * @return float Returns the prct phase.
     */
    public function getPrctPhase() {
        return $this->prctPhase;
    }

    /**
     * Set the prct phase.
     *
     * @param float $prctPhase The prct phase.
     */
    public function setPrctPhase($prctPhase) {
        $this->prctPhase = $prctPhase;
        return $this;
    }
}
