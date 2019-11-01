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
 * Liqui taxes4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLiquiTaxes4Trait {

    /**
     * Liqui taxes4.
     *
     * @var string
     */
    private $liquiTaxes4;

    /**
     * Get the liqui taxes4.
     *
     * @return string Returns the liqui taxes4.
     */
    public function getLiquiTaxes4() {
        return $this->liquiTaxes4;
    }

    /**
     * Set the liqui taxes4.
     *
     * @param string $liquiTaxes4 The liqui taxes4.
     */
    public function setLiquiTaxes4($liquiTaxes4) {
        $this->liquiTaxes4 = $liquiTaxes4;
        return $this;
    }
}
