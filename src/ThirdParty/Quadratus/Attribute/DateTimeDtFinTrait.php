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
 * Dt fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinTrait {

    /**
     * Dt fin.
     *
     * @var DateTime|null
     */
    private $dtFin;

    /**
     * Get the dt fin.
     *
     * @return DateTime|null Returns the dt fin.
     */
    public function getDtFin() {
        return $this->dtFin;
    }

    /**
     * Set the dt fin.
     *
     * @param DateTime|null $dtFin The dt fin.
     */
    public function setDtFin(DateTime $dtFin = null) {
        $this->dtFin = $dtFin;
        return $this;
    }
}
