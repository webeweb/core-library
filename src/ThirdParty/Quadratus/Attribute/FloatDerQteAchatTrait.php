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
 * Der qte achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDerQteAchatTrait {

    /**
     * Der qte achat.
     *
     * @var float
     */
    private $derQteAchat;

    /**
     * Get the der qte achat.
     *
     * @return float Returns the der qte achat.
     */
    public function getDerQteAchat() {
        return $this->derQteAchat;
    }

    /**
     * Set the der qte achat.
     *
     * @param float $derQteAchat The der qte achat.
     */
    public function setDerQteAchat($derQteAchat) {
        $this->derQteAchat = $derQteAchat;
        return $this;
    }
}
