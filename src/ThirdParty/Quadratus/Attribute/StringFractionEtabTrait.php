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
 * Fraction etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFractionEtabTrait {

    /**
     * Fraction etab.
     *
     * @var string
     */
    private $fractionEtab;

    /**
     * Get the fraction etab.
     *
     * @return string Returns the fraction etab.
     */
    public function getFractionEtab() {
        return $this->fractionEtab;
    }

    /**
     * Set the fraction etab.
     *
     * @param string $fractionEtab The fraction etab.
     */
    public function setFractionEtab($fractionEtab) {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }
}
