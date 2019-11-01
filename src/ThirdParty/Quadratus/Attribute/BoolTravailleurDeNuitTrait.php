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
 * Travailleur de nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailleurDeNuitTrait {

    /**
     * Travailleur de nuit.
     *
     * @var bool
     */
    private $travailleurDeNuit;

    /**
     * Get the travailleur de nuit.
     *
     * @return bool Returns the travailleur de nuit.
     */
    public function getTravailleurDeNuit() {
        return $this->travailleurDeNuit;
    }

    /**
     * Set the travailleur de nuit.
     *
     * @param bool $travailleurDeNuit The travailleur de nuit.
     */
    public function setTravailleurDeNuit($travailleurDeNuit) {
        $this->travailleurDeNuit = $travailleurDeNuit;
        return $this;
    }
}
