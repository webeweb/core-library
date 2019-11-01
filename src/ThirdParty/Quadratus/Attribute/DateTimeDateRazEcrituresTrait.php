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
 * Date raz ecritures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRazEcrituresTrait {

    /**
     * Date raz ecritures.
     *
     * @var DateTime|null
     */
    private $dateRazEcritures;

    /**
     * Get the date raz ecritures.
     *
     * @return DateTime|null Returns the date raz ecritures.
     */
    public function getDateRazEcritures() {
        return $this->dateRazEcritures;
    }

    /**
     * Set the date raz ecritures.
     *
     * @param DateTime|null $dateRazEcritures The date raz ecritures.
     */
    public function setDateRazEcritures(DateTime $dateRazEcritures = null) {
        $this->dateRazEcritures = $dateRazEcritures;
        return $this;
    }
}
