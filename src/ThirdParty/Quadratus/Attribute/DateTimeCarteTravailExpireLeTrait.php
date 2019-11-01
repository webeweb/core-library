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
 * Carte travail expire le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCarteTravailExpireLeTrait {

    /**
     * Carte travail expire le.
     *
     * @var DateTime|null
     */
    private $carteTravailExpireLe;

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime|null Returns the carte travail expire le.
     */
    public function getCarteTravailExpireLe() {
        return $this->carteTravailExpireLe;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime|null $carteTravailExpireLe The carte travail expire le.
     */
    public function setCarteTravailExpireLe(DateTime $carteTravailExpireLe = null) {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }
}
