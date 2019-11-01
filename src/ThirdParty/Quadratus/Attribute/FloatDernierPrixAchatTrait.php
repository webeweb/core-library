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
 * Dernier prix achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDernierPrixAchatTrait {

    /**
     * Dernier prix achat.
     *
     * @var float
     */
    private $dernierPrixAchat;

    /**
     * Get the dernier prix achat.
     *
     * @return float Returns the dernier prix achat.
     */
    public function getDernierPrixAchat() {
        return $this->dernierPrixAchat;
    }

    /**
     * Set the dernier prix achat.
     *
     * @param float $dernierPrixAchat The dernier prix achat.
     */
    public function setDernierPrixAchat($dernierPrixAchat) {
        $this->dernierPrixAchat = $dernierPrixAchat;
        return $this;
    }
}
