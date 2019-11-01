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
 * Nb h dble trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHDbleTrait {

    /**
     * Nb h dble.
     *
     * @var float
     */
    private $nbHDble;

    /**
     * Get the nb h dble.
     *
     * @return float Returns the nb h dble.
     */
    public function getNbHDble() {
        return $this->nbHDble;
    }

    /**
     * Set the nb h dble.
     *
     * @param float $nbHDble The nb h dble.
     */
    public function setNbHDble($nbHDble) {
        $this->nbHDble = $nbHDble;
        return $this;
    }
}
