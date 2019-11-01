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
 * Smic h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicHTrait {

    /**
     * Smic h.
     *
     * @var float
     */
    private $smicH;

    /**
     * Get the smic h.
     *
     * @return float Returns the smic h.
     */
    public function getSmicH() {
        return $this->smicH;
    }

    /**
     * Set the smic h.
     *
     * @param float $smicH The smic h.
     */
    public function setSmicH($smicH) {
        $this->smicH = $smicH;
        return $this;
    }
}
