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
 * Vendredi p mdeb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeVendrediPMdebTrait {

    /**
     * Vendredi p mdeb.
     *
     * @var DateTime|null
     */
    private $vendrediPMdeb;

    /**
     * Get the vendredi p mdeb.
     *
     * @return DateTime|null Returns the vendredi p mdeb.
     */
    public function getVendrediPMdeb() {
        return $this->vendrediPMdeb;
    }

    /**
     * Set the vendredi p mdeb.
     *
     * @param DateTime|null $vendrediPMdeb The vendredi p mdeb.
     */
    public function setVendrediPMdeb(DateTime $vendrediPMdeb = null) {
        $this->vendrediPMdeb = $vendrediPMdeb;
        return $this;
    }
}
