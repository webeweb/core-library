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
 * Compte ventil taxe deee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteVentilTaxeDeeeTrait {

    /**
     * Compte ventil taxe deee.
     *
     * @var string
     */
    private $compteVentilTaxeDeee;

    /**
     * Get the compte ventil taxe deee.
     *
     * @return string Returns the compte ventil taxe deee.
     */
    public function getCompteVentilTaxeDeee() {
        return $this->compteVentilTaxeDeee;
    }

    /**
     * Set the compte ventil taxe deee.
     *
     * @param string $compteVentilTaxeDeee The compte ventil taxe deee.
     */
    public function setCompteVentilTaxeDeee($compteVentilTaxeDeee) {
        $this->compteVentilTaxeDeee = $compteVentilTaxeDeee;
        return $this;
    }
}
