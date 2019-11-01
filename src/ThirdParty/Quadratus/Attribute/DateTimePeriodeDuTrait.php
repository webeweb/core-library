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
 * Periode du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeDuTrait {

    /**
     * Periode du.
     *
     * @var DateTime|null
     */
    private $periodeDu;

    /**
     * Get the periode du.
     *
     * @return DateTime|null Returns the periode du.
     */
    public function getPeriodeDu() {
        return $this->periodeDu;
    }

    /**
     * Set the periode du.
     *
     * @param DateTime|null $periodeDu The periode du.
     */
    public function setPeriodeDu(DateTime $periodeDu = null) {
        $this->periodeDu = $periodeDu;
        return $this;
    }
}
