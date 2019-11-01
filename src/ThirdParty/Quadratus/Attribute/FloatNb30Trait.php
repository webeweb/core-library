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
 * Nb30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNb30Trait {

    /**
     * Nb30.
     *
     * @var float
     */
    private $nb30;

    /**
     * Get the nb30.
     *
     * @return float Returns the nb30.
     */
    public function getNb30() {
        return $this->nb30;
    }

    /**
     * Set the nb30.
     *
     * @param float $nb30 The nb30.
     */
    public function setNb30($nb30) {
        $this->nb30 = $nb30;
        return $this;
    }
}
