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
 * Ht avec jours feries trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHtAvecJoursFeriesTrait {

    /**
     * Ht avec jours feries.
     *
     * @var bool
     */
    private $htAvecJoursFeries;

    /**
     * Get the ht avec jours feries.
     *
     * @return bool Returns the ht avec jours feries.
     */
    public function getHtAvecJoursFeries() {
        return $this->htAvecJoursFeries;
    }

    /**
     * Set the ht avec jours feries.
     *
     * @param bool $htAvecJoursFeries The ht avec jours feries.
     */
    public function setHtAvecJoursFeries($htAvecJoursFeries) {
        $this->htAvecJoursFeries = $htAvecJoursFeries;
        return $this;
    }
}
