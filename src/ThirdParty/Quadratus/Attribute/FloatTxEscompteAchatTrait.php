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
 * Tx escompte achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTxEscompteAchatTrait {

    /**
     * Tx escompte achat.
     *
     * @var float
     */
    private $txEscompteAchat;

    /**
     * Get the tx escompte achat.
     *
     * @return float Returns the tx escompte achat.
     */
    public function getTxEscompteAchat() {
        return $this->txEscompteAchat;
    }

    /**
     * Set the tx escompte achat.
     *
     * @param float $txEscompteAchat The tx escompte achat.
     */
    public function setTxEscompteAchat($txEscompteAchat) {
        $this->txEscompteAchat = $txEscompteAchat;
        return $this;
    }
}
