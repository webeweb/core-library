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
 * Avt der remise2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAvtDerRemise2Trait {

    /**
     * Avt der remise2.
     *
     * @var float
     */
    private $avtDerRemise2;

    /**
     * Get the avt der remise2.
     *
     * @return float Returns the avt der remise2.
     */
    public function getAvtDerRemise2() {
        return $this->avtDerRemise2;
    }

    /**
     * Set the avt der remise2.
     *
     * @param float $avtDerRemise2 The avt der remise2.
     */
    public function setAvtDerRemise2($avtDerRemise2) {
        $this->avtDerRemise2 = $avtDerRemise2;
        return $this;
    }
}
