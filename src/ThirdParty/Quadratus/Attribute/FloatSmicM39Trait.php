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
 * Smic m39 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicM39Trait {

    /**
     * Smic m39.
     *
     * @var float
     */
    private $smicM39;

    /**
     * Get the smic m39.
     *
     * @return float Returns the smic m39.
     */
    public function getSmicM39() {
        return $this->smicM39;
    }

    /**
     * Set the smic m39.
     *
     * @param float $smicM39 The smic m39.
     */
    public function setSmicM39($smicM39) {
        $this->smicM39 = $smicM39;
        return $this;
    }
}
