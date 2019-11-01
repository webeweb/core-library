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
 * Remise achat1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseAchat1Trait {

    /**
     * Remise achat1.
     *
     * @var float
     */
    private $remiseAchat1;

    /**
     * Get the remise achat1.
     *
     * @return float Returns the remise achat1.
     */
    public function getRemiseAchat1() {
        return $this->remiseAchat1;
    }

    /**
     * Set the remise achat1.
     *
     * @param float $remiseAchat1 The remise achat1.
     */
    public function setRemiseAchat1($remiseAchat1) {
        $this->remiseAchat1 = $remiseAchat1;
        return $this;
    }
}
