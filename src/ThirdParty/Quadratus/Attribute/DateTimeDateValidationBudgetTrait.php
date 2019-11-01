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
 * Date validation budget trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValidationBudgetTrait {

    /**
     * Date validation budget.
     *
     * @var DateTime|null
     */
    private $dateValidationBudget;

    /**
     * Get the date validation budget.
     *
     * @return DateTime|null Returns the date validation budget.
     */
    public function getDateValidationBudget() {
        return $this->dateValidationBudget;
    }

    /**
     * Set the date validation budget.
     *
     * @param DateTime|null $dateValidationBudget The date validation budget.
     */
    public function setDateValidationBudget(DateTime $dateValidationBudget = null) {
        $this->dateValidationBudget = $dateValidationBudget;
        return $this;
    }
}
