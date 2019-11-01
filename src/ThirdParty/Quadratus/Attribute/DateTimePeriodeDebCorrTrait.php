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
 * Periode deb corr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeDebCorrTrait {

    /**
     * Periode deb corr.
     *
     * @var DateTime|null
     */
    private $periodeDebCorr;

    /**
     * Get the periode deb corr.
     *
     * @return DateTime|null Returns the periode deb corr.
     */
    public function getPeriodeDebCorr() {
        return $this->periodeDebCorr;
    }

    /**
     * Set the periode deb corr.
     *
     * @param DateTime|null $periodeDebCorr The periode deb corr.
     */
    public function setPeriodeDebCorr(DateTime $periodeDebCorr = null) {
        $this->periodeDebCorr = $periodeDebCorr;
        return $this;
    }
}
