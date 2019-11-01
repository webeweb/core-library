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
 * Mt phase trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPhaseTrait {

    /**
     * Mt phase.
     *
     * @var float
     */
    private $mtPhase;

    /**
     * Get the mt phase.
     *
     * @return float Returns the mt phase.
     */
    public function getMtPhase() {
        return $this->mtPhase;
    }

    /**
     * Set the mt phase.
     *
     * @param float $mtPhase The mt phase.
     */
    public function setMtPhase($mtPhase) {
        $this->mtPhase = $mtPhase;
        return $this;
    }
}
