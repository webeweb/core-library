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
 * Nb h bonifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHBonifieTrait {

    /**
     * Nb h bonifie.
     *
     * @var float
     */
    private $nbHBonifie;

    /**
     * Get the nb h bonifie.
     *
     * @return float Returns the nb h bonifie.
     */
    public function getNbHBonifie() {
        return $this->nbHBonifie;
    }

    /**
     * Set the nb h bonifie.
     *
     * @param float $nbHBonifie The nb h bonifie.
     */
    public function setNbHBonifie($nbHBonifie) {
        $this->nbHBonifie = $nbHBonifie;
        return $this;
    }
}
