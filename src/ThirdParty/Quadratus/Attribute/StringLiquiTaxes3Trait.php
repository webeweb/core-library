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
 * Liqui taxes3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLiquiTaxes3Trait {

    /**
     * Liqui taxes3.
     *
     * @var string
     */
    private $liquiTaxes3;

    /**
     * Get the liqui taxes3.
     *
     * @return string Returns the liqui taxes3.
     */
    public function getLiquiTaxes3() {
        return $this->liquiTaxes3;
    }

    /**
     * Set the liqui taxes3.
     *
     * @param string $liquiTaxes3 The liqui taxes3.
     */
    public function setLiquiTaxes3($liquiTaxes3) {
        $this->liquiTaxes3 = $liquiTaxes3;
        return $this;
    }
}
