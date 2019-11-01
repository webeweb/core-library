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
 * Mt fisc frais sante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtFiscFraisSanteTrait {

    /**
     * Mt fisc frais sante.
     *
     * @var float
     */
    private $mtFiscFraisSante;

    /**
     * Get the mt fisc frais sante.
     *
     * @return float Returns the mt fisc frais sante.
     */
    public function getMtFiscFraisSante() {
        return $this->mtFiscFraisSante;
    }

    /**
     * Set the mt fisc frais sante.
     *
     * @param float $mtFiscFraisSante The mt fisc frais sante.
     */
    public function setMtFiscFraisSante($mtFiscFraisSante) {
        $this->mtFiscFraisSante = $mtFiscFraisSante;
        return $this;
    }
}
