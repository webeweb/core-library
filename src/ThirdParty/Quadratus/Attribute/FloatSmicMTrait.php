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
 * Smic m trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicMTrait {

    /**
     * Smic m.
     *
     * @var float
     */
    private $smicM;

    /**
     * Get the smic m.
     *
     * @return float Returns the smic m.
     */
    public function getSmicM() {
        return $this->smicM;
    }

    /**
     * Set the smic m.
     *
     * @param float $smicM The smic m.
     */
    public function setSmicM($smicM) {
        $this->smicM = $smicM;
        return $this;
    }
}
