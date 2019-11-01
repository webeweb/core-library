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
 * Nbre h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHTrait {

    /**
     * Nbre h.
     *
     * @var float
     */
    private $nbreH;

    /**
     * Get the nbre h.
     *
     * @return float Returns the nbre h.
     */
    public function getNbreH() {
        return $this->nbreH;
    }

    /**
     * Set the nbre h.
     *
     * @param float $nbreH The nbre h.
     */
    public function setNbreH($nbreH) {
        $this->nbreH = $nbreH;
        return $this;
    }
}
