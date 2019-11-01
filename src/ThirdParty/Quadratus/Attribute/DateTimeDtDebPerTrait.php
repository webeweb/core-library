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
 * Dt deb per trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebPerTrait {

    /**
     * Dt deb per.
     *
     * @var DateTime|null
     */
    private $dtDebPer;

    /**
     * Get the dt deb per.
     *
     * @return DateTime|null Returns the dt deb per.
     */
    public function getDtDebPer() {
        return $this->dtDebPer;
    }

    /**
     * Set the dt deb per.
     *
     * @param DateTime|null $dtDebPer The dt deb per.
     */
    public function setDtDebPer(DateTime $dtDebPer = null) {
        $this->dtDebPer = $dtDebPer;
        return $this;
    }
}
