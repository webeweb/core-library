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
 * Paniers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPaniersTrait {

    /**
     * Paniers.
     *
     * @var float
     */
    private $paniers;

    /**
     * Get the paniers.
     *
     * @return float Returns the paniers.
     */
    public function getPaniers() {
        return $this->paniers;
    }

    /**
     * Set the paniers.
     *
     * @param float $paniers The paniers.
     */
    public function setPaniers($paniers) {
        $this->paniers = $paniers;
        return $this;
    }
}
