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
 * Remise sup achat2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseSupAchat2Trait {

    /**
     * Remise sup achat2.
     *
     * @var float
     */
    private $remiseSupAchat2;

    /**
     * Get the remise sup achat2.
     *
     * @return float Returns the remise sup achat2.
     */
    public function getRemiseSupAchat2() {
        return $this->remiseSupAchat2;
    }

    /**
     * Set the remise sup achat2.
     *
     * @param float $remiseSupAchat2 The remise sup achat2.
     */
    public function setRemiseSupAchat2($remiseSupAchat2) {
        $this->remiseSupAchat2 = $remiseSupAchat2;
        return $this;
    }
}
