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
 * Nb h abs jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbsJfTrait {

    /**
     * Nb h abs jf.
     *
     * @var float
     */
    private $nbHAbsJf;

    /**
     * Get the nb h abs jf.
     *
     * @return float Returns the nb h abs jf.
     */
    public function getNbHAbsJf() {
        return $this->nbHAbsJf;
    }

    /**
     * Set the nb h abs jf.
     *
     * @param float $nbHAbsJf The nb h abs jf.
     */
    public function setNbHAbsJf($nbHAbsJf) {
        $this->nbHAbsJf = $nbHAbsJf;
        return $this;
    }
}
