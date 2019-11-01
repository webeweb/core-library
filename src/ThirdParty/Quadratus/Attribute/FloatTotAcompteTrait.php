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
 * Tot acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotAcompteTrait {

    /**
     * Tot acompte.
     *
     * @var float
     */
    private $totAcompte;

    /**
     * Get the tot acompte.
     *
     * @return float Returns the tot acompte.
     */
    public function getTotAcompte() {
        return $this->totAcompte;
    }

    /**
     * Set the tot acompte.
     *
     * @param float $totAcompte The tot acompte.
     */
    public function setTotAcompte($totAcompte) {
        $this->totAcompte = $totAcompte;
        return $this;
    }
}
