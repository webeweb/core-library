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
 * Nb h lig sal base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHLigSalBaseTrait {

    /**
     * Nb h lig sal base.
     *
     * @var float
     */
    private $nbHLigSalBase;

    /**
     * Get the nb h lig sal base.
     *
     * @return float Returns the nb h lig sal base.
     */
    public function getNbHLigSalBase() {
        return $this->nbHLigSalBase;
    }

    /**
     * Set the nb h lig sal base.
     *
     * @param float $nbHLigSalBase The nb h lig sal base.
     */
    public function setNbHLigSalBase($nbHLigSalBase) {
        $this->nbHLigSalBase = $nbHLigSalBase;
        return $this;
    }
}
