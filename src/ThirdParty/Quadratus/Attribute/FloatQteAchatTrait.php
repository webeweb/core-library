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
 * Qte achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteAchatTrait {

    /**
     * Qte achat.
     *
     * @var float
     */
    private $qteAchat;

    /**
     * Get the qte achat.
     *
     * @return float Returns the qte achat.
     */
    public function getQteAchat() {
        return $this->qteAchat;
    }

    /**
     * Set the qte achat.
     *
     * @param float $qteAchat The qte achat.
     */
    public function setQteAchat($qteAchat) {
        $this->qteAchat = $qteAchat;
        return $this;
    }
}
