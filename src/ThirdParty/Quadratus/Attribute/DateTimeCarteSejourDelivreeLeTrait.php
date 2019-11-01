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
 * Carte sejour delivree le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCarteSejourDelivreeLeTrait {

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime|null
     */
    private $carteSejourDelivreeLe;

    /**
     * Get the carte sejour delivree le.
     *
     * @return DateTime|null Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe() {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime|null $carteSejourDelivreeLe The carte sejour delivree le.
     */
    public function setCarteSejourDelivreeLe(DateTime $carteSejourDelivreeLe = null) {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }
}
