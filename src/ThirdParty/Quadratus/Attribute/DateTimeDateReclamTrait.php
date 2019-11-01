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
 * Date reclam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateReclamTrait {

    /**
     * Date reclam.
     *
     * @var DateTime|null
     */
    private $dateReclam;

    /**
     * Get the date reclam.
     *
     * @return DateTime|null Returns the date reclam.
     */
    public function getDateReclam() {
        return $this->dateReclam;
    }

    /**
     * Set the date reclam.
     *
     * @param DateTime|null $dateReclam The date reclam.
     */
    public function setDateReclam(DateTime $dateReclam = null) {
        $this->dateReclam = $dateReclam;
        return $this;
    }
}
