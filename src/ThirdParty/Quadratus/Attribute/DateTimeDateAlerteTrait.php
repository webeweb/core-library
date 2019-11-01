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
 * Date alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAlerteTrait {

    /**
     * Date alerte.
     *
     * @var DateTime|null
     */
    private $dateAlerte;

    /**
     * Get the date alerte.
     *
     * @return DateTime|null Returns the date alerte.
     */
    public function getDateAlerte() {
        return $this->dateAlerte;
    }

    /**
     * Set the date alerte.
     *
     * @param DateTime|null $dateAlerte The date alerte.
     */
    public function setDateAlerte(DateTime $dateAlerte = null) {
        $this->dateAlerte = $dateAlerte;
        return $this;
    }
}
