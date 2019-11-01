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
 * Colisage px achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatColisagePxAchatTrait {

    /**
     * Colisage px achat.
     *
     * @var float
     */
    private $colisagePxAchat;

    /**
     * Get the colisage px achat.
     *
     * @return float Returns the colisage px achat.
     */
    public function getColisagePxAchat() {
        return $this->colisagePxAchat;
    }

    /**
     * Set the colisage px achat.
     *
     * @param float $colisagePxAchat The colisage px achat.
     */
    public function setColisagePxAchat($colisagePxAchat) {
        $this->colisagePxAchat = $colisagePxAchat;
        return $this;
    }
}
