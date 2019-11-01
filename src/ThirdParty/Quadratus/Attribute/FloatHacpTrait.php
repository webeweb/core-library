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
 * Hacp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHacpTrait {

    /**
     * Hacp.
     *
     * @var float
     */
    private $hacp;

    /**
     * Get the hacp.
     *
     * @return float Returns the hacp.
     */
    public function getHacp() {
        return $this->hacp;
    }

    /**
     * Set the hacp.
     *
     * @param float $hacp The hacp.
     */
    public function setHacp($hacp) {
        $this->hacp = $hacp;
        return $this;
    }
}
