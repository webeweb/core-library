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
 * Planning dern sem prioritaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlanningDernSemPrioritaireTrait {

    /**
     * Planning dern sem prioritaire.
     *
     * @var bool
     */
    private $planningDernSemPrioritaire;

    /**
     * Get the planning dern sem prioritaire.
     *
     * @return bool Returns the planning dern sem prioritaire.
     */
    public function getPlanningDernSemPrioritaire() {
        return $this->planningDernSemPrioritaire;
    }

    /**
     * Set the planning dern sem prioritaire.
     *
     * @param bool $planningDernSemPrioritaire The planning dern sem prioritaire.
     */
    public function setPlanningDernSemPrioritaire($planningDernSemPrioritaire) {
        $this->planningDernSemPrioritaire = $planningDernSemPrioritaire;
        return $this;
    }
}
