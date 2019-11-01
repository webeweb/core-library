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
 * Bons a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBonsAPayerTrait {

    /**
     * Bons a payer.
     *
     * @var bool
     */
    private $bonsAPayer;

    /**
     * Get the bons a payer.
     *
     * @return bool Returns the bons a payer.
     */
    public function getBonsAPayer() {
        return $this->bonsAPayer;
    }

    /**
     * Set the bons a payer.
     *
     * @param bool $bonsAPayer The bons a payer.
     */
    public function setBonsAPayer($bonsAPayer) {
        $this->bonsAPayer = $bonsAPayer;
        return $this;
    }
}
