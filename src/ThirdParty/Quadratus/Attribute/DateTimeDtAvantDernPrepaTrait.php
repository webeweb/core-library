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
 * Dt avant dern prepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtAvantDernPrepaTrait {

    /**
     * Dt avant dern prepa.
     *
     * @var DateTime|null
     */
    private $dtAvantDernPrepa;

    /**
     * Get the dt avant dern prepa.
     *
     * @return DateTime|null Returns the dt avant dern prepa.
     */
    public function getDtAvantDernPrepa() {
        return $this->dtAvantDernPrepa;
    }

    /**
     * Set the dt avant dern prepa.
     *
     * @param DateTime|null $dtAvantDernPrepa The dt avant dern prepa.
     */
    public function setDtAvantDernPrepa(DateTime $dtAvantDernPrepa = null) {
        $this->dtAvantDernPrepa = $dtAvantDernPrepa;
        return $this;
    }
}
