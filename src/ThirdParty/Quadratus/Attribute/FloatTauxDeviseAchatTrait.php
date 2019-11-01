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
 * Taux devise achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxDeviseAchatTrait {

    /**
     * Taux devise achat.
     *
     * @var float
     */
    private $tauxDeviseAchat;

    /**
     * Get the taux devise achat.
     *
     * @return float Returns the taux devise achat.
     */
    public function getTauxDeviseAchat() {
        return $this->tauxDeviseAchat;
    }

    /**
     * Set the taux devise achat.
     *
     * @param float $tauxDeviseAchat The taux devise achat.
     */
    public function setTauxDeviseAchat($tauxDeviseAchat) {
        $this->tauxDeviseAchat = $tauxDeviseAchat;
        return $this;
    }
}
