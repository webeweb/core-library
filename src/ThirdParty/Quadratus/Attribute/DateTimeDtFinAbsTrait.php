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
 * Dt fin abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinAbsTrait {

    /**
     * Dt fin abs.
     *
     * @var DateTime|null
     */
    private $dtFinAbs;

    /**
     * Get the dt fin abs.
     *
     * @return DateTime|null Returns the dt fin abs.
     */
    public function getDtFinAbs() {
        return $this->dtFinAbs;
    }

    /**
     * Set the dt fin abs.
     *
     * @param DateTime|null $dtFinAbs The dt fin abs.
     */
    public function setDtFinAbs(DateTime $dtFinAbs = null) {
        $this->dtFinAbs = $dtFinAbs;
        return $this;
    }
}
