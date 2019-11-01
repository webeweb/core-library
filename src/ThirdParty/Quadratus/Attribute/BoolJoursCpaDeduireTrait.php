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
 * Jours cpa deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolJoursCpaDeduireTrait {

    /**
     * Jours cpa deduire.
     *
     * @var bool
     */
    private $joursCpaDeduire;

    /**
     * Get the jours cpa deduire.
     *
     * @return bool Returns the jours cpa deduire.
     */
    public function getJoursCpaDeduire() {
        return $this->joursCpaDeduire;
    }

    /**
     * Set the jours cpa deduire.
     *
     * @param bool $joursCpaDeduire The jours cpa deduire.
     */
    public function setJoursCpaDeduire($joursCpaDeduire) {
        $this->joursCpaDeduire = $joursCpaDeduire;
        return $this;
    }
}
