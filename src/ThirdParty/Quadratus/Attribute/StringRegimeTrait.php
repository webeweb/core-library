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
 * Regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegimeTrait {

    /**
     * Regime.
     *
     * @var string
     */
    private $regime;

    /**
     * Get the regime.
     *
     * @return string Returns the regime.
     */
    public function getRegime() {
        return $this->regime;
    }

    /**
     * Set the regime.
     *
     * @param string $regime The regime.
     */
    public function setRegime($regime) {
        $this->regime = $regime;
        return $this;
    }
}
