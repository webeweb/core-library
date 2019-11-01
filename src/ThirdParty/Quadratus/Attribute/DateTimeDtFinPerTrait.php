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
 * Dt fin per trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinPerTrait {

    /**
     * Dt fin per.
     *
     * @var DateTime|null
     */
    private $dtFinPer;

    /**
     * Get the dt fin per.
     *
     * @return DateTime|null Returns the dt fin per.
     */
    public function getDtFinPer() {
        return $this->dtFinPer;
    }

    /**
     * Set the dt fin per.
     *
     * @param DateTime|null $dtFinPer The dt fin per.
     */
    public function setDtFinPer(DateTime $dtFinPer = null) {
        $this->dtFinPer = $dtFinPer;
        return $this;
    }
}
