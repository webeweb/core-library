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
 * Mini qte achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMiniQteAchatTrait {

    /**
     * Mini qte achat.
     *
     * @var float
     */
    private $miniQteAchat;

    /**
     * Get the mini qte achat.
     *
     * @return float Returns the mini qte achat.
     */
    public function getMiniQteAchat() {
        return $this->miniQteAchat;
    }

    /**
     * Set the mini qte achat.
     *
     * @param float $miniQteAchat The mini qte achat.
     */
    public function setMiniQteAchat($miniQteAchat) {
        $this->miniQteAchat = $miniQteAchat;
        return $this;
    }
}
