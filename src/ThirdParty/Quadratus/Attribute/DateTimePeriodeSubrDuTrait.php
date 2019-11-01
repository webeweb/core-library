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
 * Periode subr du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeSubrDuTrait {

    /**
     * Periode subr du.
     *
     * @var DateTime|null
     */
    private $periodeSubrDu;

    /**
     * Get the periode subr du.
     *
     * @return DateTime|null Returns the periode subr du.
     */
    public function getPeriodeSubrDu() {
        return $this->periodeSubrDu;
    }

    /**
     * Set the periode subr du.
     *
     * @param DateTime|null $periodeSubrDu The periode subr du.
     */
    public function setPeriodeSubrDu(DateTime $periodeSubrDu = null) {
        $this->periodeSubrDu = $periodeSubrDu;
        return $this;
    }
}
