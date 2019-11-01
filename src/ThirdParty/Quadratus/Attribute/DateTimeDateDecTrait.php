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
 * Date dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDecTrait {

    /**
     * Date dec.
     *
     * @var DateTime|null
     */
    private $dateDec;

    /**
     * Get the date dec.
     *
     * @return DateTime|null Returns the date dec.
     */
    public function getDateDec() {
        return $this->dateDec;
    }

    /**
     * Set the date dec.
     *
     * @param DateTime|null $dateDec The date dec.
     */
    public function setDateDec(DateTime $dateDec = null) {
        $this->dateDec = $dateDec;
        return $this;
    }
}
