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
 * Px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxAchatTrait {

    /**
     * Px achat.
     *
     * @var float
     */
    private $pxAchat;

    /**
     * Get the px achat.
     *
     * @return float Returns the px achat.
     */
    public function getPxAchat() {
        return $this->pxAchat;
    }

    /**
     * Set the px achat.
     *
     * @param float $pxAchat The px achat.
     */
    public function setPxAchat($pxAchat) {
        $this->pxAchat = $pxAchat;
        return $this;
    }
}
