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
 * Dt dern prepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDernPrepaTrait {

    /**
     * Dt dern prepa.
     *
     * @var DateTime|null
     */
    private $dtDernPrepa;

    /**
     * Get the dt dern prepa.
     *
     * @return DateTime|null Returns the dt dern prepa.
     */
    public function getDtDernPrepa() {
        return $this->dtDernPrepa;
    }

    /**
     * Set the dt dern prepa.
     *
     * @param DateTime|null $dtDernPrepa The dt dern prepa.
     */
    public function setDtDernPrepa(DateTime $dtDernPrepa = null) {
        $this->dtDernPrepa = $dtDernPrepa;
        return $this;
    }
}
