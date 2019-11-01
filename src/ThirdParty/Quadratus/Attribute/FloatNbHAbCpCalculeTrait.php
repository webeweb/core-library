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
 * Nb h ab cp calcule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbCpCalculeTrait {

    /**
     * Nb h ab cp calcule.
     *
     * @var float
     */
    private $nbHAbCpCalcule;

    /**
     * Get the nb h ab cp calcule.
     *
     * @return float Returns the nb h ab cp calcule.
     */
    public function getNbHAbCpCalcule() {
        return $this->nbHAbCpCalcule;
    }

    /**
     * Set the nb h ab cp calcule.
     *
     * @param float $nbHAbCpCalcule The nb h ab cp calcule.
     */
    public function setNbHAbCpCalcule($nbHAbCpCalcule) {
        $this->nbHAbCpCalcule = $nbHAbCpCalcule;
        return $this;
    }
}
