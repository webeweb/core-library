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
 * Colisage achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatColisageAchatTrait {

    /**
     * Colisage achat.
     *
     * @var float
     */
    private $colisageAchat;

    /**
     * Get the colisage achat.
     *
     * @return float Returns the colisage achat.
     */
    public function getColisageAchat() {
        return $this->colisageAchat;
    }

    /**
     * Set the colisage achat.
     *
     * @param float $colisageAchat The colisage achat.
     */
    public function setColisageAchat($colisageAchat) {
        $this->colisageAchat = $colisageAchat;
        return $this;
    }
}
