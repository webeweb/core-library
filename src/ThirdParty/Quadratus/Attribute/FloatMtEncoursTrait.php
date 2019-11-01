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
 * Mt encours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtEncoursTrait {

    /**
     * Mt encours.
     *
     * @var float
     */
    private $mtEncours;

    /**
     * Get the mt encours.
     *
     * @return float Returns the mt encours.
     */
    public function getMtEncours() {
        return $this->mtEncours;
    }

    /**
     * Set the mt encours.
     *
     * @param float $mtEncours The mt encours.
     */
    public function setMtEncours($mtEncours) {
        $this->mtEncours = $mtEncours;
        return $this;
    }
}
