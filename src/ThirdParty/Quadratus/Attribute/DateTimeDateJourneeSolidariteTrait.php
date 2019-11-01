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
 * Date journee solidarite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateJourneeSolidariteTrait {

    /**
     * Date journee solidarite.
     *
     * @var DateTime|null
     */
    private $dateJourneeSolidarite;

    /**
     * Get the date journee solidarite.
     *
     * @return DateTime|null Returns the date journee solidarite.
     */
    public function getDateJourneeSolidarite() {
        return $this->dateJourneeSolidarite;
    }

    /**
     * Set the date journee solidarite.
     *
     * @param DateTime|null $dateJourneeSolidarite The date journee solidarite.
     */
    public function setDateJourneeSolidarite(DateTime $dateJourneeSolidarite = null) {
        $this->dateJourneeSolidarite = $dateJourneeSolidarite;
        return $this;
    }
}
