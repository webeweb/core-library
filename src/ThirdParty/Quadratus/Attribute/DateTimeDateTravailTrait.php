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
 * Date travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTravailTrait {

    /**
     * Date travail.
     *
     * @var DateTime|null
     */
    private $dateTravail;

    /**
     * Get the date travail.
     *
     * @return DateTime|null Returns the date travail.
     */
    public function getDateTravail() {
        return $this->dateTravail;
    }

    /**
     * Set the date travail.
     *
     * @param DateTime|null $dateTravail The date travail.
     */
    public function setDateTravail(DateTime $dateTravail = null) {
        $this->dateTravail = $dateTravail;
        return $this;
    }
}
