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
 * Per dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerDecTrait {

    /**
     * Per dec.
     *
     * @var DateTime|null
     */
    private $perDec;

    /**
     * Get the per dec.
     *
     * @return DateTime|null Returns the per dec.
     */
    public function getPerDec() {
        return $this->perDec;
    }

    /**
     * Set the per dec.
     *
     * @param DateTime|null $perDec The per dec.
     */
    public function setPerDec(DateTime $perDec = null) {
        $this->perDec = $perDec;
        return $this;
    }
}
