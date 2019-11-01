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
 * Nb salaries trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbSalariesTrait {

    /**
     * Nb salaries.
     *
     * @var int
     */
    private $nbSalaries;

    /**
     * Get the nb salaries.
     *
     * @return int Returns the nb salaries.
     */
    public function getNbSalaries() {
        return $this->nbSalaries;
    }

    /**
     * Set the nb salaries.
     *
     * @param int $nbSalaries The nb salaries.
     */
    public function setNbSalaries($nbSalaries) {
        $this->nbSalaries = $nbSalaries;
        return $this;
    }
}
