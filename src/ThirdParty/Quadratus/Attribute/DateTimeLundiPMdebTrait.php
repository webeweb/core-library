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
 * Lundi p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLundiPMdebTrait {

    /**
     * Lundi p mdeb.
     *
     * @var DateTime|null
     */
    private $lundiPMdeb;

    /**
     * Get the lundi p mdeb.
     *
     * @return DateTime|null Returns the lundi p mdeb.
     */
    public function getLundiPMdeb() {
        return $this->lundiPMdeb;
    }

    /**
     * Set the lundi p mdeb.
     *
     * @param DateTime|null $lundiPMdeb The lundi p mdeb.
     */
    public function setLundiPMdeb(DateTime $lundiPMdeb = null) {
        $this->lundiPMdeb = $lundiPMdeb;
        return $this;
    }
}
