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
 * Dernier px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDernierPxAchatTrait {

    /**
     * Dernier px achat.
     *
     * @var float
     */
    private $dernierPxAchat;

    /**
     * Get the dernier px achat.
     *
     * @return float Returns the dernier px achat.
     */
    public function getDernierPxAchat() {
        return $this->dernierPxAchat;
    }

    /**
     * Set the dernier px achat.
     *
     * @param float $dernierPxAchat The dernier px achat.
     */
    public function setDernierPxAchat($dernierPxAchat) {
        $this->dernierPxAchat = $dernierPxAchat;
        return $this;
    }
}
