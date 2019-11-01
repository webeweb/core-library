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
 * Date pmec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePmecTrait {

    /**
     * Date pmec.
     *
     * @var DateTime|null
     */
    private $datePmec;

    /**
     * Get the date pmec.
     *
     * @return DateTime|null Returns the date pmec.
     */
    public function getDatePmec() {
        return $this->datePmec;
    }

    /**
     * Set the date pmec.
     *
     * @param DateTime|null $datePmec The date pmec.
     */
    public function setDatePmec(DateTime $datePmec = null) {
        $this->datePmec = $datePmec;
        return $this;
    }
}
