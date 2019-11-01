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
 * Date jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateJourTrait {

    /**
     * Date jour.
     *
     * @var DateTime|null
     */
    private $dateJour;

    /**
     * Get the date jour.
     *
     * @return DateTime|null Returns the date jour.
     */
    public function getDateJour() {
        return $this->dateJour;
    }

    /**
     * Set the date jour.
     *
     * @param DateTime|null $dateJour The date jour.
     */
    public function setDateJour(DateTime $dateJour = null) {
        $this->dateJour = $dateJour;
        return $this;
    }
}
