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
 * Duree bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeBtTrait {

    /**
     * Duree bt.
     *
     * @var float
     */
    private $dureeBt;

    /**
     * Get the duree bt.
     *
     * @return float Returns the duree bt.
     */
    public function getDureeBt() {
        return $this->dureeBt;
    }

    /**
     * Set the duree bt.
     *
     * @param float $dureeBt The duree bt.
     */
    public function setDureeBt($dureeBt) {
        $this->dureeBt = $dureeBt;
        return $this;
    }
}
