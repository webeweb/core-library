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
 * Nb h contract trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHContractTrait {

    /**
     * Nb h contract.
     *
     * @var float
     */
    private $nbHContract;

    /**
     * Get the nb h contract.
     *
     * @return float Returns the nb h contract.
     */
    public function getNbHContract() {
        return $this->nbHContract;
    }

    /**
     * Set the nb h contract.
     *
     * @param float $nbHContract The nb h contract.
     */
    public function setNbHContract($nbHContract) {
        $this->nbHContract = $nbHContract;
        return $this;
    }
}
