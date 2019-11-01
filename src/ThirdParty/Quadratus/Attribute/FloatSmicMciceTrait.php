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
 * Smic mcice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicMciceTrait {

    /**
     * Smic mcice.
     *
     * @var float
     */
    private $smicMcice;

    /**
     * Get the smic mcice.
     *
     * @return float Returns the smic mcice.
     */
    public function getSmicMcice() {
        return $this->smicMcice;
    }

    /**
     * Set the smic mcice.
     *
     * @param float $smicMcice The smic mcice.
     */
    public function setSmicMcice($smicMcice) {
        $this->smicMcice = $smicMcice;
        return $this;
    }
}
