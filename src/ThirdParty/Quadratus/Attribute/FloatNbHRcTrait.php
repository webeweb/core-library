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
 * Nb h rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRcTrait {

    /**
     * Nb h rc.
     *
     * @var float
     */
    private $nbHRc;

    /**
     * Get the nb h rc.
     *
     * @return float Returns the nb h rc.
     */
    public function getNbHRc() {
        return $this->nbHRc;
    }

    /**
     * Set the nb h rc.
     *
     * @param float $nbHRc The nb h rc.
     */
    public function setNbHRc($nbHRc) {
        $this->nbHRc = $nbHRc;
        return $this;
    }
}
