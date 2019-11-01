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
 * Avt der remise1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAvtDerRemise1Trait {

    /**
     * Avt der remise1.
     *
     * @var float
     */
    private $avtDerRemise1;

    /**
     * Get the avt der remise1.
     *
     * @return float Returns the avt der remise1.
     */
    public function getAvtDerRemise1() {
        return $this->avtDerRemise1;
    }

    /**
     * Set the avt der remise1.
     *
     * @param float $avtDerRemise1 The avt der remise1.
     */
    public function setAvtDerRemise1($avtDerRemise1) {
        $this->avtDerRemise1 = $avtDerRemise1;
        return $this;
    }
}
