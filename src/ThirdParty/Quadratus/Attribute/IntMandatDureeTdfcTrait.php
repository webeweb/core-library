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
 * Mandat duree tdfc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureeTdfcTrait {

    /**
     * Mandat duree tdfc.
     *
     * @var int
     */
    private $mandatDureeTdfc;

    /**
     * Get the mandat duree tdfc.
     *
     * @return int Returns the mandat duree tdfc.
     */
    public function getMandatDureeTdfc() {
        return $this->mandatDureeTdfc;
    }

    /**
     * Set the mandat duree tdfc.
     *
     * @param int $mandatDureeTdfc The mandat duree tdfc.
     */
    public function setMandatDureeTdfc($mandatDureeTdfc) {
        $this->mandatDureeTdfc = $mandatDureeTdfc;
        return $this;
    }
}
