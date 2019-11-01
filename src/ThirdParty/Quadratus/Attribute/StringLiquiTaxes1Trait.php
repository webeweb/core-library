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
 * Liqui taxes1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLiquiTaxes1Trait {

    /**
     * Liqui taxes1.
     *
     * @var string
     */
    private $liquiTaxes1;

    /**
     * Get the liqui taxes1.
     *
     * @return string Returns the liqui taxes1.
     */
    public function getLiquiTaxes1() {
        return $this->liquiTaxes1;
    }

    /**
     * Set the liqui taxes1.
     *
     * @param string $liquiTaxes1 The liqui taxes1.
     */
    public function setLiquiTaxes1($liquiTaxes1) {
        $this->liquiTaxes1 = $liquiTaxes1;
        return $this;
    }
}
