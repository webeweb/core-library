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
 * H deb nuit trav nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHDebNuitTravNuitTrait {

    /**
     * H deb nuit trav nuit.
     *
     * @var DateTime|null
     */
    private $hDebNuitTravNuit;

    /**
     * Get the h deb nuit trav nuit.
     *
     * @return DateTime|null Returns the h deb nuit trav nuit.
     */
    public function getHDebNuitTravNuit() {
        return $this->hDebNuitTravNuit;
    }

    /**
     * Set the h deb nuit trav nuit.
     *
     * @param DateTime|null $hDebNuitTravNuit The h deb nuit trav nuit.
     */
    public function setHDebNuitTravNuit(DateTime $hDebNuitTravNuit = null) {
        $this->hDebNuitTravNuit = $hDebNuitTravNuit;
        return $this;
    }
}
