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
 * Smic h39 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicH39Trait {

    /**
     * Smic h39.
     *
     * @var float
     */
    private $smicH39;

    /**
     * Get the smic h39.
     *
     * @return float Returns the smic h39.
     */
    public function getSmicH39() {
        return $this->smicH39;
    }

    /**
     * Set the smic h39.
     *
     * @param float $smicH39 The smic h39.
     */
    public function setSmicH39($smicH39) {
        $this->smicH39 = $smicH39;
        return $this;
    }
}
