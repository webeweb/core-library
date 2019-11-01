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
 * Nb h contingent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHContingentTrait {

    /**
     * Nb h contingent.
     *
     * @var float
     */
    private $nbHContingent;

    /**
     * Get the nb h contingent.
     *
     * @return float Returns the nb h contingent.
     */
    public function getNbHContingent() {
        return $this->nbHContingent;
    }

    /**
     * Set the nb h contingent.
     *
     * @param float $nbHContingent The nb h contingent.
     */
    public function setNbHContingent($nbHContingent) {
        $this->nbHContingent = $nbHContingent;
        return $this;
    }
}
