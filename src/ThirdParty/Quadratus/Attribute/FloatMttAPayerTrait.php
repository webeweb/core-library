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
 * Mtt a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttAPayerTrait {

    /**
     * Mtt a payer.
     *
     * @var float
     */
    private $mttAPayer;

    /**
     * Get the mtt a payer.
     *
     * @return float Returns the mtt a payer.
     */
    public function getMttAPayer() {
        return $this->mttAPayer;
    }

    /**
     * Set the mtt a payer.
     *
     * @param float $mttAPayer The mtt a payer.
     */
    public function setMttAPayer($mttAPayer) {
        $this->mttAPayer = $mttAPayer;
        return $this;
    }
}
