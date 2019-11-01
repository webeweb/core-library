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
 * Mt patronal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPatronalTrait {

    /**
     * Mt patronal.
     *
     * @var float
     */
    private $mtPatronal;

    /**
     * Get the mt patronal.
     *
     * @return float Returns the mt patronal.
     */
    public function getMtPatronal() {
        return $this->mtPatronal;
    }

    /**
     * Set the mt patronal.
     *
     * @param float $mtPatronal The mt patronal.
     */
    public function setMtPatronal($mtPatronal) {
        $this->mtPatronal = $mtPatronal;
        return $this;
    }
}
