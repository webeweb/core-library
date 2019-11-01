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
 * Mini px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMiniPxAchatTrait {

    /**
     * Mini px achat.
     *
     * @var float
     */
    private $miniPxAchat;

    /**
     * Get the mini px achat.
     *
     * @return float Returns the mini px achat.
     */
    public function getMiniPxAchat() {
        return $this->miniPxAchat;
    }

    /**
     * Set the mini px achat.
     *
     * @param float $miniPxAchat The mini px achat.
     */
    public function setMiniPxAchat($miniPxAchat) {
        $this->miniPxAchat = $miniPxAchat;
        return $this;
    }
}
