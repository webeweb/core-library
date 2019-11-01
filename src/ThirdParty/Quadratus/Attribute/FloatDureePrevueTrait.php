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
 * Duree prevue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureePrevueTrait {

    /**
     * Duree prevue.
     *
     * @var float
     */
    private $dureePrevue;

    /**
     * Get the duree prevue.
     *
     * @return float Returns the duree prevue.
     */
    public function getDureePrevue() {
        return $this->dureePrevue;
    }

    /**
     * Set the duree prevue.
     *
     * @param float $dureePrevue The duree prevue.
     */
    public function setDureePrevue($dureePrevue) {
        $this->dureePrevue = $dureePrevue;
        return $this;
    }
}
