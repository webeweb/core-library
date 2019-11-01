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
 * Periode revisee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeReviseeTrait {

    /**
     * Periode revisee.
     *
     * @var DateTime|null
     */
    private $periodeRevisee;

    /**
     * Get the periode revisee.
     *
     * @return DateTime|null Returns the periode revisee.
     */
    public function getPeriodeRevisee() {
        return $this->periodeRevisee;
    }

    /**
     * Set the periode revisee.
     *
     * @param DateTime|null $periodeRevisee The periode revisee.
     */
    public function setPeriodeRevisee(DateTime $periodeRevisee = null) {
        $this->periodeRevisee = $periodeRevisee;
        return $this;
    }
}
