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
 * Budget type saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBudgetTypeSaisieTrait {

    /**
     * Budget type saisie.
     *
     * @var int
     */
    private $budgetTypeSaisie;

    /**
     * Get the budget type saisie.
     *
     * @return int Returns the budget type saisie.
     */
    public function getBudgetTypeSaisie() {
        return $this->budgetTypeSaisie;
    }

    /**
     * Set the budget type saisie.
     *
     * @param int $budgetTypeSaisie The budget type saisie.
     */
    public function setBudgetTypeSaisie($budgetTypeSaisie) {
        $this->budgetTypeSaisie = $budgetTypeSaisie;
        return $this;
    }
}
