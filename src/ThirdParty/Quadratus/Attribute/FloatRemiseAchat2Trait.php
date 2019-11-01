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
 * Remise achat2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseAchat2Trait {

    /**
     * Remise achat2.
     *
     * @var float
     */
    private $remiseAchat2;

    /**
     * Get the remise achat2.
     *
     * @return float Returns the remise achat2.
     */
    public function getRemiseAchat2() {
        return $this->remiseAchat2;
    }

    /**
     * Set the remise achat2.
     *
     * @param float $remiseAchat2 The remise achat2.
     */
    public function setRemiseAchat2($remiseAchat2) {
        $this->remiseAchat2 = $remiseAchat2;
        return $this;
    }
}
