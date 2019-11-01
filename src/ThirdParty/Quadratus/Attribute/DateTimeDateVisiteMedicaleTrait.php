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
 * Date visite medicale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateVisiteMedicaleTrait {

    /**
     * Date visite medicale.
     *
     * @var DateTime|null
     */
    private $dateVisiteMedicale;

    /**
     * Get the date visite medicale.
     *
     * @return DateTime|null Returns the date visite medicale.
     */
    public function getDateVisiteMedicale() {
        return $this->dateVisiteMedicale;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime|null $dateVisiteMedicale The date visite medicale.
     */
    public function setDateVisiteMedicale(DateTime $dateVisiteMedicale = null) {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }
}
