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
 * Lst code phase trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLstCodePhaseTrait {

    /**
     * Lst code phase.
     *
     * @var string
     */
    private $lstCodePhase;

    /**
     * Get the lst code phase.
     *
     * @return string Returns the lst code phase.
     */
    public function getLstCodePhase() {
        return $this->lstCodePhase;
    }

    /**
     * Set the lst code phase.
     *
     * @param string $lstCodePhase The lst code phase.
     */
    public function setLstCodePhase($lstCodePhase) {
        $this->lstCodePhase = $lstCodePhase;
        return $this;
    }
}
