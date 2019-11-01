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
 * Nb h abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbsTrait {

    /**
     * Nb h abs.
     *
     * @var float
     */
    private $nbHAbs;

    /**
     * Get the nb h abs.
     *
     * @return float Returns the nb h abs.
     */
    public function getNbHAbs() {
        return $this->nbHAbs;
    }

    /**
     * Set the nb h abs.
     *
     * @param float $nbHAbs The nb h abs.
     */
    public function setNbHAbs($nbHAbs) {
        $this->nbHAbs = $nbHAbs;
        return $this;
    }
}
