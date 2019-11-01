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
 * Taxe apprentissage code assuj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTaxeApprentissageCodeAssujTrait {

    /**
     * Taxe apprentissage code assuj.
     *
     * @var string
     */
    private $taxeApprentissageCodeAssuj;

    /**
     * Get the taxe apprentissage code assuj.
     *
     * @return string Returns the taxe apprentissage code assuj.
     */
    public function getTaxeApprentissageCodeAssuj() {
        return $this->taxeApprentissageCodeAssuj;
    }

    /**
     * Set the taxe apprentissage code assuj.
     *
     * @param string $taxeApprentissageCodeAssuj The taxe apprentissage code assuj.
     */
    public function setTaxeApprentissageCodeAssuj($taxeApprentissageCodeAssuj) {
        $this->taxeApprentissageCodeAssuj = $taxeApprentissageCodeAssuj;
        return $this;
    }
}
