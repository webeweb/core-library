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
 * Mardi p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMardiPMdebTrait {

    /**
     * Mardi p mdeb.
     *
     * @var DateTime|null
     */
    private $mardiPMdeb;

    /**
     * Get the mardi p mdeb.
     *
     * @return DateTime|null Returns the mardi p mdeb.
     */
    public function getMardiPMdeb() {
        return $this->mardiPMdeb;
    }

    /**
     * Set the mardi p mdeb.
     *
     * @param DateTime|null $mardiPMdeb The mardi p mdeb.
     */
    public function setMardiPMdeb(DateTime $mardiPMdeb = null) {
        $this->mardiPMdeb = $mardiPMdeb;
        return $this;
    }
}
