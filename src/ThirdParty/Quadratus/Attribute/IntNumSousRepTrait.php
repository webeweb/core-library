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
 * Num sous rep trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumSousRepTrait {

    /**
     * Num sous rep.
     *
     * @var int
     */
    private $numSousRep;

    /**
     * Get the num sous rep.
     *
     * @return int Returns the num sous rep.
     */
    public function getNumSousRep() {
        return $this->numSousRep;
    }

    /**
     * Set the num sous rep.
     *
     * @param int $numSousRep The num sous rep.
     */
    public function setNumSousRep($numSousRep) {
        $this->numSousRep = $numSousRep;
        return $this;
    }
}
