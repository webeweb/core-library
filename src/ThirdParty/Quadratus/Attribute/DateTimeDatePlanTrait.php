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

use DateTime;

/**
 * Date plan trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePlanTrait {

    /**
     * Date plan.
     *
     * @var DateTime|null
     */
    private $datePlan;

    /**
     * Get the date plan.
     *
     * @return DateTime|null Returns the date plan.
     */
    public function getDatePlan() {
        return $this->datePlan;
    }

    /**
     * Set the date plan.
     *
     * @param DateTime|null $datePlan The date plan.
     */
    public function setDatePlan(DateTime $datePlan = null) {
        $this->datePlan = $datePlan;
        return $this;
    }
}
