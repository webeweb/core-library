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
 * Remise achat3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseAchat3Trait {

    /**
     * Remise achat3.
     *
     * @var float
     */
    private $remiseAchat3;

    /**
     * Get the remise achat3.
     *
     * @return float Returns the remise achat3.
     */
    public function getRemiseAchat3() {
        return $this->remiseAchat3;
    }

    /**
     * Set the remise achat3.
     *
     * @param float $remiseAchat3 The remise achat3.
     */
    public function setRemiseAchat3($remiseAchat3) {
        $this->remiseAchat3 = $remiseAchat3;
        return $this;
    }
}
