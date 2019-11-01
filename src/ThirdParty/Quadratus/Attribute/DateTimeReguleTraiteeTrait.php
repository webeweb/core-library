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
 * Regule traitee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeReguleTraiteeTrait {

    /**
     * Regule traitee.
     *
     * @var DateTime|null
     */
    private $reguleTraitee;

    /**
     * Get the regule traitee.
     *
     * @return DateTime|null Returns the regule traitee.
     */
    public function getReguleTraitee() {
        return $this->reguleTraitee;
    }

    /**
     * Set the regule traitee.
     *
     * @param DateTime|null $reguleTraitee The regule traitee.
     */
    public function setReguleTraitee(DateTime $reguleTraitee = null) {
        $this->reguleTraitee = $reguleTraitee;
        return $this;
    }
}
