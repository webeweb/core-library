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
 * Remise sup achat1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseSupAchat1Trait {

    /**
     * Remise sup achat1.
     *
     * @var float
     */
    private $remiseSupAchat1;

    /**
     * Get the remise sup achat1.
     *
     * @return float Returns the remise sup achat1.
     */
    public function getRemiseSupAchat1() {
        return $this->remiseSupAchat1;
    }

    /**
     * Set the remise sup achat1.
     *
     * @param float $remiseSupAchat1 The remise sup achat1.
     */
    public function setRemiseSupAchat1($remiseSupAchat1) {
        $this->remiseSupAchat1 = $remiseSupAchat1;
        return $this;
    }
}
