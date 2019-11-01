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
 * Date comptage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateComptageTrait {

    /**
     * Date comptage.
     *
     * @var DateTime|null
     */
    private $dateComptage;

    /**
     * Get the date comptage.
     *
     * @return DateTime|null Returns the date comptage.
     */
    public function getDateComptage() {
        return $this->dateComptage;
    }

    /**
     * Set the date comptage.
     *
     * @param DateTime|null $dateComptage The date comptage.
     */
    public function setDateComptage(DateTime $dateComptage = null) {
        $this->dateComptage = $dateComptage;
        return $this;
    }
}
