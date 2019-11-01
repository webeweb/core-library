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
 * Nb c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbCTrait {

    /**
     * Nb c.
     *
     * @var float
     */
    private $nbC;

    /**
     * Get the nb c.
     *
     * @return float Returns the nb c.
     */
    public function getNbC() {
        return $this->nbC;
    }

    /**
     * Set the nb c.
     *
     * @param float $nbC The nb c.
     */
    public function setNbC($nbC) {
        $this->nbC = $nbC;
        return $this;
    }
}
