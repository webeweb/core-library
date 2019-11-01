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
 * Nb h cas part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHCasPartTrait {

    /**
     * Nb h cas part.
     *
     * @var float
     */
    private $nbHCasPart;

    /**
     * Get the nb h cas part.
     *
     * @return float Returns the nb h cas part.
     */
    public function getNbHCasPart() {
        return $this->nbHCasPart;
    }

    /**
     * Set the nb h cas part.
     *
     * @param float $nbHCasPart The nb h cas part.
     */
    public function setNbHCasPart($nbHCasPart) {
        $this->nbHCasPart = $nbHCasPart;
        return $this;
    }
}
