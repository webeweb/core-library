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
 * Taxe apprentissage base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaxeApprentissageBaseTrait {

    /**
     * Taxe apprentissage base.
     *
     * @var float
     */
    private $taxeApprentissageBase;

    /**
     * Get the taxe apprentissage base.
     *
     * @return float Returns the taxe apprentissage base.
     */
    public function getTaxeApprentissageBase() {
        return $this->taxeApprentissageBase;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float $taxeApprentissageBase The taxe apprentissage base.
     */
    public function setTaxeApprentissageBase($taxeApprentissageBase) {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }
}
