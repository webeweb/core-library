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
 * Nb h jour6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour6Trait {

    /**
     * Nb h jour6.
     *
     * @var float
     */
    private $nbHJour6;

    /**
     * Get the nb h jour6.
     *
     * @return float Returns the nb h jour6.
     */
    public function getNbHJour6() {
        return $this->nbHJour6;
    }

    /**
     * Set the nb h jour6.
     *
     * @param float $nbHJour6 The nb h jour6.
     */
    public function setNbHJour6($nbHJour6) {
        $this->nbHJour6 = $nbHJour6;
        return $this;
    }
}
