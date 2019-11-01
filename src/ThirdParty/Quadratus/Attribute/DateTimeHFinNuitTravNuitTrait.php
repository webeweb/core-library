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
 * H fin nuit trav nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHFinNuitTravNuitTrait {

    /**
     * H fin nuit trav nuit.
     *
     * @var DateTime|null
     */
    private $hFinNuitTravNuit;

    /**
     * Get the h fin nuit trav nuit.
     *
     * @return DateTime|null Returns the h fin nuit trav nuit.
     */
    public function getHFinNuitTravNuit() {
        return $this->hFinNuitTravNuit;
    }

    /**
     * Set the h fin nuit trav nuit.
     *
     * @param DateTime|null $hFinNuitTravNuit The h fin nuit trav nuit.
     */
    public function setHFinNuitTravNuit(DateTime $hFinNuitTravNuit = null) {
        $this->hFinNuitTravNuit = $hFinNuitTravNuit;
        return $this;
    }
}
