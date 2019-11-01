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
 * Smic m35 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicM35Trait {

    /**
     * Smic m35.
     *
     * @var float
     */
    private $smicM35;

    /**
     * Get the smic m35.
     *
     * @return float Returns the smic m35.
     */
    public function getSmicM35() {
        return $this->smicM35;
    }

    /**
     * Set the smic m35.
     *
     * @param float $smicM35 The smic m35.
     */
    public function setSmicM35($smicM35) {
        $this->smicM35 = $smicM35;
        return $this;
    }
}
