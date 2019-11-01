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
 * Tva fictive1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictive1Trait {

    /**
     * Tva fictive1.
     *
     * @var float
     */
    private $tvaFictive1;

    /**
     * Get the tva fictive1.
     *
     * @return float Returns the tva fictive1.
     */
    public function getTvaFictive1() {
        return $this->tvaFictive1;
    }

    /**
     * Set the tva fictive1.
     *
     * @param float $tvaFictive1 The tva fictive1.
     */
    public function setTvaFictive1($tvaFictive1) {
        $this->tvaFictive1 = $tvaFictive1;
        return $this;
    }
}
