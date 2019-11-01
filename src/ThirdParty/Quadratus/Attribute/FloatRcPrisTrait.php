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
 * Rc pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRcPrisTrait {

    /**
     * Rc pris.
     *
     * @var float
     */
    private $rcPris;

    /**
     * Get the rc pris.
     *
     * @return float Returns the rc pris.
     */
    public function getRcPris() {
        return $this->rcPris;
    }

    /**
     * Set the rc pris.
     *
     * @param float $rcPris The rc pris.
     */
    public function setRcPris($rcPris) {
        $this->rcPris = $rcPris;
        return $this;
    }
}
