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
 * Nb h sup bonif abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSupBonifAbsTrait {

    /**
     * Nb h sup bonif abs.
     *
     * @var float
     */
    private $nbHSupBonifAbs;

    /**
     * Get the nb h sup bonif abs.
     *
     * @return float Returns the nb h sup bonif abs.
     */
    public function getNbHSupBonifAbs() {
        return $this->nbHSupBonifAbs;
    }

    /**
     * Set the nb h sup bonif abs.
     *
     * @param float $nbHSupBonifAbs The nb h sup bonif abs.
     */
    public function setNbHSupBonifAbs($nbHSupBonifAbs) {
        $this->nbHSupBonifAbs = $nbHSupBonifAbs;
        return $this;
    }
}
