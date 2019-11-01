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
 * Taxe fonciere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTaxeFonciereTrait {

    /**
     * Taxe fonciere.
     *
     * @var bool
     */
    private $taxeFonciere;

    /**
     * Get the taxe fonciere.
     *
     * @return bool Returns the taxe fonciere.
     */
    public function getTaxeFonciere() {
        return $this->taxeFonciere;
    }

    /**
     * Set the taxe fonciere.
     *
     * @param bool $taxeFonciere The taxe fonciere.
     */
    public function setTaxeFonciere($taxeFonciere) {
        $this->taxeFonciere = $taxeFonciere;
        return $this;
    }
}
