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
 * Der px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDerPxAchatTrait {

    /**
     * Der px achat.
     *
     * @var float
     */
    private $derPxAchat;

    /**
     * Get the der px achat.
     *
     * @return float Returns the der px achat.
     */
    public function getDerPxAchat() {
        return $this->derPxAchat;
    }

    /**
     * Set the der px achat.
     *
     * @param float $derPxAchat The der px achat.
     */
    public function setDerPxAchat($derPxAchat) {
        $this->derPxAchat = $derPxAchat;
        return $this;
    }
}
