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
 * Taux tva achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTvaAchatTrait {

    /**
     * Taux tva achat.
     *
     * @var float
     */
    private $tauxTvaAchat;

    /**
     * Get the taux tva achat.
     *
     * @return float Returns the taux tva achat.
     */
    public function getTauxTvaAchat() {
        return $this->tauxTvaAchat;
    }

    /**
     * Set the taux tva achat.
     *
     * @param float $tauxTvaAchat The taux tva achat.
     */
    public function setTauxTvaAchat($tauxTvaAchat) {
        $this->tauxTvaAchat = $tauxTvaAchat;
        return $this;
    }
}
