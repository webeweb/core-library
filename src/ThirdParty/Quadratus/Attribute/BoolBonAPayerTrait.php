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
 * Bon a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBonAPayerTrait {

    /**
     * Bon a payer.
     *
     * @var bool
     */
    private $bonAPayer;

    /**
     * Get the bon a payer.
     *
     * @return bool Returns the bon a payer.
     */
    public function getBonAPayer() {
        return $this->bonAPayer;
    }

    /**
     * Set the bon a payer.
     *
     * @param bool $bonAPayer The bon a payer.
     */
    public function setBonAPayer($bonAPayer) {
        $this->bonAPayer = $bonAPayer;
        return $this;
    }
}
