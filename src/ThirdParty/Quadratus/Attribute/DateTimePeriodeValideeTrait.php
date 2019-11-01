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
 * Periode validee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeValideeTrait {

    /**
     * Periode validee.
     *
     * @var DateTime|null
     */
    private $periodeValidee;

    /**
     * Get the periode validee.
     *
     * @return DateTime|null Returns the periode validee.
     */
    public function getPeriodeValidee() {
        return $this->periodeValidee;
    }

    /**
     * Set the periode validee.
     *
     * @param DateTime|null $periodeValidee The periode validee.
     */
    public function setPeriodeValidee(DateTime $periodeValidee = null) {
        $this->periodeValidee = $periodeValidee;
        return $this;
    }
}
