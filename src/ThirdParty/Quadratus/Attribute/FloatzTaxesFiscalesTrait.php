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
 * z taxes fiscales trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzTaxesFiscalesTrait {

    /**
     * z taxes fiscales.
     *
     * @var float
     */
    private $zTaxesFiscales;

    /**
     * Get the z taxes fiscales.
     *
     * @return float Returns the z taxes fiscales.
     */
    public function getzTaxesFiscales() {
        return $this->zTaxesFiscales;
    }

    /**
     * Set the z taxes fiscales.
     *
     * @param float $zTaxesFiscales The z taxes fiscales.
     */
    public function setzTaxesFiscales($zTaxesFiscales) {
        $this->zTaxesFiscales = $zTaxesFiscales;
        return $this;
    }
}
