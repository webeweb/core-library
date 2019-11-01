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
 * Avt der px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAvtDerPxAchatTrait {

    /**
     * Avt der px achat.
     *
     * @var float
     */
    private $avtDerPxAchat;

    /**
     * Get the avt der px achat.
     *
     * @return float Returns the avt der px achat.
     */
    public function getAvtDerPxAchat() {
        return $this->avtDerPxAchat;
    }

    /**
     * Set the avt der px achat.
     *
     * @param float $avtDerPxAchat The avt der px achat.
     */
    public function setAvtDerPxAchat($avtDerPxAchat) {
        $this->avtDerPxAchat = $avtDerPxAchat;
        return $this;
    }
}
