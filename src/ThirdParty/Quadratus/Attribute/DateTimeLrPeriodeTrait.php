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
 * Lr periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLrPeriodeTrait {

    /**
     * Lr periode.
     *
     * @var DateTime|null
     */
    private $lrPeriode;

    /**
     * Get the lr periode.
     *
     * @return DateTime|null Returns the lr periode.
     */
    public function getLrPeriode() {
        return $this->lrPeriode;
    }

    /**
     * Set the lr periode.
     *
     * @param DateTime|null $lrPeriode The lr periode.
     */
    public function setLrPeriode(DateTime $lrPeriode = null) {
        $this->lrPeriode = $lrPeriode;
        return $this;
    }
}
