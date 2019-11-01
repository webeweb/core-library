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
 * Dt deb abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebAbsTrait {

    /**
     * Dt deb abs.
     *
     * @var DateTime|null
     */
    private $dtDebAbs;

    /**
     * Get the dt deb abs.
     *
     * @return DateTime|null Returns the dt deb abs.
     */
    public function getDtDebAbs() {
        return $this->dtDebAbs;
    }

    /**
     * Set the dt deb abs.
     *
     * @param DateTime|null $dtDebAbs The dt deb abs.
     */
    public function setDtDebAbs(DateTime $dtDebAbs = null) {
        $this->dtDebAbs = $dtDebAbs;
        return $this;
    }
}
