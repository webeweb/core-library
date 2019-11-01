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
 * Avt der remise3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAvtDerRemise3Trait {

    /**
     * Avt der remise3.
     *
     * @var float
     */
    private $avtDerRemise3;

    /**
     * Get the avt der remise3.
     *
     * @return float Returns the avt der remise3.
     */
    public function getAvtDerRemise3() {
        return $this->avtDerRemise3;
    }

    /**
     * Set the avt der remise3.
     *
     * @param float $avtDerRemise3 The avt der remise3.
     */
    public function setAvtDerRemise3($avtDerRemise3) {
        $this->avtDerRemise3 = $avtDerRemise3;
        return $this;
    }
}
