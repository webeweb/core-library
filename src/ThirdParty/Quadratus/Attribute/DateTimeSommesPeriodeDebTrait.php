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
 * Sommes periode deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSommesPeriodeDebTrait {

    /**
     * Sommes periode deb.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeDeb;

    /**
     * Get the sommes periode deb.
     *
     * @return DateTime|null Returns the sommes periode deb.
     */
    public function getSommesPeriodeDeb() {
        return $this->sommesPeriodeDeb;
    }

    /**
     * Set the sommes periode deb.
     *
     * @param DateTime|null $sommesPeriodeDeb The sommes periode deb.
     */
    public function setSommesPeriodeDeb(DateTime $sommesPeriodeDeb = null) {
        $this->sommesPeriodeDeb = $sommesPeriodeDeb;
        return $this;
    }
}
