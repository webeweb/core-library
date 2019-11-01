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
 * Num cpt charges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptChargesTrait {

    /**
     * Num cpt charges.
     *
     * @var string
     */
    private $numCptCharges;

    /**
     * Get the num cpt charges.
     *
     * @return string Returns the num cpt charges.
     */
    public function getNumCptCharges() {
        return $this->numCptCharges;
    }

    /**
     * Set the num cpt charges.
     *
     * @param string $numCptCharges The num cpt charges.
     */
    public function setNumCptCharges($numCptCharges) {
        $this->numCptCharges = $numCptCharges;
        return $this;
    }
}
