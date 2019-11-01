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
 * Periode fin corr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeFinCorrTrait {

    /**
     * Periode fin corr.
     *
     * @var DateTime|null
     */
    private $periodeFinCorr;

    /**
     * Get the periode fin corr.
     *
     * @return DateTime|null Returns the periode fin corr.
     */
    public function getPeriodeFinCorr() {
        return $this->periodeFinCorr;
    }

    /**
     * Set the periode fin corr.
     *
     * @param DateTime|null $periodeFinCorr The periode fin corr.
     */
    public function setPeriodeFinCorr(DateTime $periodeFinCorr = null) {
        $this->periodeFinCorr = $periodeFinCorr;
        return $this;
    }
}
