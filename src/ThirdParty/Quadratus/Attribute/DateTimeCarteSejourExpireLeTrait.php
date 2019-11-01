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
 * Carte sejour expire le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCarteSejourExpireLeTrait {

    /**
     * Carte sejour expire le.
     *
     * @var DateTime|null
     */
    private $carteSejourExpireLe;

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime|null Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe() {
        return $this->carteSejourExpireLe;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime|null $carteSejourExpireLe The carte sejour expire le.
     */
    public function setCarteSejourExpireLe(DateTime $carteSejourExpireLe = null) {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }
}
