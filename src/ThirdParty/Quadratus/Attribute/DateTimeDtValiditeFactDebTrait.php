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
 * Dt validite fact deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtValiditeFactDebTrait {

    /**
     * Dt validite fact deb.
     *
     * @var DateTime|null
     */
    private $dtValiditeFactDeb;

    /**
     * Get the dt validite fact deb.
     *
     * @return DateTime|null Returns the dt validite fact deb.
     */
    public function getDtValiditeFactDeb() {
        return $this->dtValiditeFactDeb;
    }

    /**
     * Set the dt validite fact deb.
     *
     * @param DateTime|null $dtValiditeFactDeb The dt validite fact deb.
     */
    public function setDtValiditeFactDeb(DateTime $dtValiditeFactDeb = null) {
        $this->dtValiditeFactDeb = $dtValiditeFactDeb;
        return $this;
    }
}
