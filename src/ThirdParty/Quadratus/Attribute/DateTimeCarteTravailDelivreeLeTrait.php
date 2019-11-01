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
 * Carte travail delivree le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCarteTravailDelivreeLeTrait {

    /**
     * Carte travail delivree le.
     *
     * @var DateTime|null
     */
    private $carteTravailDelivreeLe;

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime|null Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe() {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime|null $carteTravailDelivreeLe The carte travail delivree le.
     */
    public function setCarteTravailDelivreeLe(DateTime $carteTravailDelivreeLe = null) {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }
}
