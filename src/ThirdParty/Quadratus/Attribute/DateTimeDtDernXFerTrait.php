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
 * Dt dern x fer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDernXFerTrait {

    /**
     * Dt dern x fer.
     *
     * @var DateTime|null
     */
    private $dtDernXFer;

    /**
     * Get the dt dern x fer.
     *
     * @return DateTime|null Returns the dt dern x fer.
     */
    public function getDtDernXFer() {
        return $this->dtDernXFer;
    }

    /**
     * Set the dt dern x fer.
     *
     * @param DateTime|null $dtDernXFer The dt dern x fer.
     */
    public function setDtDernXFer(DateTime $dtDernXFer = null) {
        $this->dtDernXFer = $dtDernXFer;
        return $this;
    }
}
