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
 * Date rappel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRappelTrait {

    /**
     * Date rappel.
     *
     * @var DateTime|null
     */
    private $dateRappel;

    /**
     * Get the date rappel.
     *
     * @return DateTime|null Returns the date rappel.
     */
    public function getDateRappel() {
        return $this->dateRappel;
    }

    /**
     * Set the date rappel.
     *
     * @param DateTime|null $dateRappel The date rappel.
     */
    public function setDateRappel(DateTime $dateRappel = null) {
        $this->dateRappel = $dateRappel;
        return $this;
    }
}
