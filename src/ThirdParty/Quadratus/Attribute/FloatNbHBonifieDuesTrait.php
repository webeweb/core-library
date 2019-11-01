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
 * Nb h bonifie dues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHBonifieDuesTrait {

    /**
     * Nb h bonifie dues.
     *
     * @var float
     */
    private $nbHBonifieDues;

    /**
     * Get the nb h bonifie dues.
     *
     * @return float Returns the nb h bonifie dues.
     */
    public function getNbHBonifieDues() {
        return $this->nbHBonifieDues;
    }

    /**
     * Set the nb h bonifie dues.
     *
     * @param float $nbHBonifieDues The nb h bonifie dues.
     */
    public function setNbHBonifieDues($nbHBonifieDues) {
        $this->nbHBonifieDues = $nbHBonifieDues;
        return $this;
    }
}
