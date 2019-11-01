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
 * Lundi p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLundiPMfinTrait {

    /**
     * Lundi p mfin.
     *
     * @var DateTime|null
     */
    private $lundiPMfin;

    /**
     * Get the lundi p mfin.
     *
     * @return DateTime|null Returns the lundi p mfin.
     */
    public function getLundiPMfin() {
        return $this->lundiPMfin;
    }

    /**
     * Set the lundi p mfin.
     *
     * @param DateTime|null $lundiPMfin The lundi p mfin.
     */
    public function setLundiPMfin(DateTime $lundiPMfin = null) {
        $this->lundiPMfin = $lundiPMfin;
        return $this;
    }
}
