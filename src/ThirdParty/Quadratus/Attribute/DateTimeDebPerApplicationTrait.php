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
 * Deb per application trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebPerApplicationTrait {

    /**
     * Deb per application.
     *
     * @var DateTime|null
     */
    private $debPerApplication;

    /**
     * Get the deb per application.
     *
     * @return DateTime|null Returns the deb per application.
     */
    public function getDebPerApplication() {
        return $this->debPerApplication;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime|null $debPerApplication The deb per application.
     */
    public function setDebPerApplication(DateTime $debPerApplication = null) {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }
}
