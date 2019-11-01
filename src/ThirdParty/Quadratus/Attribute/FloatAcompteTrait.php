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
 * Acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAcompteTrait {

    /**
     * Acompte.
     *
     * @var float
     */
    private $acompte;

    /**
     * Get the acompte.
     *
     * @return float Returns the acompte.
     */
    public function getAcompte() {
        return $this->acompte;
    }

    /**
     * Set the acompte.
     *
     * @param float $acompte The acompte.
     */
    public function setAcompte($acompte) {
        $this->acompte = $acompte;
        return $this;
    }
}
