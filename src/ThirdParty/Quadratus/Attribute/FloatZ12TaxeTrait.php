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
 * Z12 taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatZ12TaxeTrait {

    /**
     * Z12 taxe.
     *
     * @var float
     */
    private $z12Taxe;

    /**
     * Get the z12 taxe.
     *
     * @return float Returns the z12 taxe.
     */
    public function getZ12Taxe() {
        return $this->z12Taxe;
    }

    /**
     * Set the z12 taxe.
     *
     * @param float $z12Taxe The z12 taxe.
     */
    public function setZ12Taxe($z12Taxe) {
        $this->z12Taxe = $z12Taxe;
        return $this;
    }
}
