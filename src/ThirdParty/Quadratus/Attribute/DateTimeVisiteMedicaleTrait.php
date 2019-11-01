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
 * Visite medicale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeVisiteMedicaleTrait {

    /**
     * Visite medicale.
     *
     * @var DateTime|null
     */
    private $visiteMedicale;

    /**
     * Get the visite medicale.
     *
     * @return DateTime|null Returns the visite medicale.
     */
    public function getVisiteMedicale() {
        return $this->visiteMedicale;
    }

    /**
     * Set the visite medicale.
     *
     * @param DateTime|null $visiteMedicale The visite medicale.
     */
    public function setVisiteMedicale(DateTime $visiteMedicale = null) {
        $this->visiteMedicale = $visiteMedicale;
        return $this;
    }
}
