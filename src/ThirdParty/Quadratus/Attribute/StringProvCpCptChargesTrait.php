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
 * Prov cp cpt charges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProvCpCptChargesTrait {

    /**
     * Prov cp cpt charges.
     *
     * @var string
     */
    private $provCpCptCharges;

    /**
     * Get the prov cp cpt charges.
     *
     * @return string Returns the prov cp cpt charges.
     */
    public function getProvCpCptCharges() {
        return $this->provCpCptCharges;
    }

    /**
     * Set the prov cp cpt charges.
     *
     * @param string $provCpCptCharges The prov cp cpt charges.
     */
    public function setProvCpCptCharges($provCpCptCharges) {
        $this->provCpCptCharges = $provCpCptCharges;
        return $this;
    }
}
