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
 * Fin per application trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinPerApplicationTrait {

    /**
     * Fin per application.
     *
     * @var DateTime|null
     */
    private $finPerApplication;

    /**
     * Get the fin per application.
     *
     * @return DateTime|null Returns the fin per application.
     */
    public function getFinPerApplication() {
        return $this->finPerApplication;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime|null $finPerApplication The fin per application.
     */
    public function setFinPerApplication(DateTime $finPerApplication = null) {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }
}
