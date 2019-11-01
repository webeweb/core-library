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
 * Code reg jv neg fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegJvNegFinTrait {

    /**
     * Code reg jv neg fin.
     *
     * @var string
     */
    private $codeRegJvNegFin;

    /**
     * Get the code reg jv neg fin.
     *
     * @return string Returns the code reg jv neg fin.
     */
    public function getCodeRegJvNegFin() {
        return $this->codeRegJvNegFin;
    }

    /**
     * Set the code reg jv neg fin.
     *
     * @param string $codeRegJvNegFin The code reg jv neg fin.
     */
    public function setCodeRegJvNegFin($codeRegJvNegFin) {
        $this->codeRegJvNegFin = $codeRegJvNegFin;
        return $this;
    }
}
