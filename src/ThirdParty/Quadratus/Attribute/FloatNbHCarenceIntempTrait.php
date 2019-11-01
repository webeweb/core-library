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
 * Nb h carence intemp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHCarenceIntempTrait {

    /**
     * Nb h carence intemp.
     *
     * @var float
     */
    private $nbHCarenceIntemp;

    /**
     * Get the nb h carence intemp.
     *
     * @return float Returns the nb h carence intemp.
     */
    public function getNbHCarenceIntemp() {
        return $this->nbHCarenceIntemp;
    }

    /**
     * Set the nb h carence intemp.
     *
     * @param float $nbHCarenceIntemp The nb h carence intemp.
     */
    public function setNbHCarenceIntemp($nbHCarenceIntemp) {
        $this->nbHCarenceIntemp = $nbHCarenceIntemp;
        return $this;
    }
}
