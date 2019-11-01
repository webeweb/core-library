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
 * Annulation plan facturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationPlanFacturationTrait {

    /**
     * Annulation plan facturation.
     *
     * @var bool
     */
    private $annulationPlanFacturation;

    /**
     * Get the annulation plan facturation.
     *
     * @return bool Returns the annulation plan facturation.
     */
    public function getAnnulationPlanFacturation() {
        return $this->annulationPlanFacturation;
    }

    /**
     * Set the annulation plan facturation.
     *
     * @param bool $annulationPlanFacturation The annulation plan facturation.
     */
    public function setAnnulationPlanFacturation($annulationPlanFacturation) {
        $this->annulationPlanFacturation = $annulationPlanFacturation;
        return $this;
    }
}
