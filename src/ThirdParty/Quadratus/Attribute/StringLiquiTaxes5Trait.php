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
 * Liqui taxes5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLiquiTaxes5Trait {

    /**
     * Liqui taxes5.
     *
     * @var string
     */
    private $liquiTaxes5;

    /**
     * Get the liqui taxes5.
     *
     * @return string Returns the liqui taxes5.
     */
    public function getLiquiTaxes5() {
        return $this->liquiTaxes5;
    }

    /**
     * Set the liqui taxes5.
     *
     * @param string $liquiTaxes5 The liqui taxes5.
     */
    public function setLiquiTaxes5($liquiTaxes5) {
        $this->liquiTaxes5 = $liquiTaxes5;
        return $this;
    }
}
