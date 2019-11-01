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
 * Liqui taxes2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLiquiTaxes2Trait {

    /**
     * Liqui taxes2.
     *
     * @var string
     */
    private $liquiTaxes2;

    /**
     * Get the liqui taxes2.
     *
     * @return string Returns the liqui taxes2.
     */
    public function getLiquiTaxes2() {
        return $this->liquiTaxes2;
    }

    /**
     * Set the liqui taxes2.
     *
     * @param string $liquiTaxes2 The liqui taxes2.
     */
    public function setLiquiTaxes2($liquiTaxes2) {
        $this->liquiTaxes2 = $liquiTaxes2;
        return $this;
    }
}
