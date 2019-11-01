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
 * Periode rev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeRevTrait {

    /**
     * Periode rev.
     *
     * @var DateTime|null
     */
    private $periodeRev;

    /**
     * Get the periode rev.
     *
     * @return DateTime|null Returns the periode rev.
     */
    public function getPeriodeRev() {
        return $this->periodeRev;
    }

    /**
     * Set the periode rev.
     *
     * @param DateTime|null $periodeRev The periode rev.
     */
    public function setPeriodeRev(DateTime $periodeRev = null) {
        $this->periodeRev = $periodeRev;
        return $this;
    }
}
