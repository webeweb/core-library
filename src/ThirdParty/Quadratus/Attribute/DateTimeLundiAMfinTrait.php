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
 * Lundi a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLundiAMfinTrait {

    /**
     * Lundi a mfin.
     *
     * @var DateTime|null
     */
    private $lundiAMfin;

    /**
     * Get the lundi a mfin.
     *
     * @return DateTime|null Returns the lundi a mfin.
     */
    public function getLundiAMfin() {
        return $this->lundiAMfin;
    }

    /**
     * Set the lundi a mfin.
     *
     * @param DateTime|null $lundiAMfin The lundi a mfin.
     */
    public function setLundiAMfin(DateTime $lundiAMfin = null) {
        $this->lundiAMfin = $lundiAMfin;
        return $this;
    }
}
