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
 * Date installation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateInstallationTrait {

    /**
     * Date installation.
     *
     * @var DateTime|null
     */
    private $dateInstallation;

    /**
     * Get the date installation.
     *
     * @return DateTime|null Returns the date installation.
     */
    public function getDateInstallation() {
        return $this->dateInstallation;
    }

    /**
     * Set the date installation.
     *
     * @param DateTime|null $dateInstallation The date installation.
     */
    public function setDateInstallation(DateTime $dateInstallation = null) {
        $this->dateInstallation = $dateInstallation;
        return $this;
    }
}
