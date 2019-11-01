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
 * Travaille jours feries trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailleJoursFeriesTrait {

    /**
     * Travaille jours feries.
     *
     * @var bool
     */
    private $travailleJoursFeries;

    /**
     * Get the travaille jours feries.
     *
     * @return bool Returns the travaille jours feries.
     */
    public function getTravailleJoursFeries() {
        return $this->travailleJoursFeries;
    }

    /**
     * Set the travaille jours feries.
     *
     * @param bool $travailleJoursFeries The travaille jours feries.
     */
    public function setTravailleJoursFeries($travailleJoursFeries) {
        $this->travailleJoursFeries = $travailleJoursFeries;
        return $this;
    }
}
