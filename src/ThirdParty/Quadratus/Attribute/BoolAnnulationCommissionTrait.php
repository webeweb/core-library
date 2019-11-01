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
 * Annulation commission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationCommissionTrait {

    /**
     * Annulation commission.
     *
     * @var bool
     */
    private $annulationCommission;

    /**
     * Get the annulation commission.
     *
     * @return bool Returns the annulation commission.
     */
    public function getAnnulationCommission() {
        return $this->annulationCommission;
    }

    /**
     * Set the annulation commission.
     *
     * @param bool $annulationCommission The annulation commission.
     */
    public function setAnnulationCommission($annulationCommission) {
        $this->annulationCommission = $annulationCommission;
        return $this;
    }
}
