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
 * Avt der qte achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAvtDerQteAchatTrait {

    /**
     * Avt der qte achat.
     *
     * @var float
     */
    private $avtDerQteAchat;

    /**
     * Get the avt der qte achat.
     *
     * @return float Returns the avt der qte achat.
     */
    public function getAvtDerQteAchat() {
        return $this->avtDerQteAchat;
    }

    /**
     * Set the avt der qte achat.
     *
     * @param float $avtDerQteAchat The avt der qte achat.
     */
    public function setAvtDerQteAchat($avtDerQteAchat) {
        $this->avtDerQteAchat = $avtDerQteAchat;
        return $this;
    }
}
