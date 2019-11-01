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
 * Remise sup achat3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseSupAchat3Trait {

    /**
     * Remise sup achat3.
     *
     * @var float
     */
    private $remiseSupAchat3;

    /**
     * Get the remise sup achat3.
     *
     * @return float Returns the remise sup achat3.
     */
    public function getRemiseSupAchat3() {
        return $this->remiseSupAchat3;
    }

    /**
     * Set the remise sup achat3.
     *
     * @param float $remiseSupAchat3 The remise sup achat3.
     */
    public function setRemiseSupAchat3($remiseSupAchat3) {
        $this->remiseSupAchat3 = $remiseSupAchat3;
        return $this;
    }
}
