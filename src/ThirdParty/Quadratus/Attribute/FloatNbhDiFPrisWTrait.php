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
 * Nbh di f pris w trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhDiFPrisWTrait {

    /**
     * Nbh di f pris w.
     *
     * @var float
     */
    private $nbhDiFPrisW;

    /**
     * Get the nbh di f pris w.
     *
     * @return float Returns the nbh di f pris w.
     */
    public function getNbhDiFPrisW() {
        return $this->nbhDiFPrisW;
    }

    /**
     * Set the nbh di f pris w.
     *
     * @param float $nbhDiFPrisW The nbh di f pris w.
     */
    public function setNbhDiFPrisW($nbhDiFPrisW) {
        $this->nbhDiFPrisW = $nbhDiFPrisW;
        return $this;
    }
}
