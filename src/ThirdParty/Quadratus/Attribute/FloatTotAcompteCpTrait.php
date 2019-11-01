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
 * Tot acompte cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotAcompteCpTrait {

    /**
     * Tot acompte cp.
     *
     * @var float
     */
    private $totAcompteCp;

    /**
     * Get the tot acompte cp.
     *
     * @return float Returns the tot acompte cp.
     */
    public function getTotAcompteCp() {
        return $this->totAcompteCp;
    }

    /**
     * Set the tot acompte cp.
     *
     * @param float $totAcompteCp The tot acompte cp.
     */
    public function setTotAcompteCp($totAcompteCp) {
        $this->totAcompteCp = $totAcompteCp;
        return $this;
    }
}
