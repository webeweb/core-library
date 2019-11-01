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
 * Date avenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAvenantTrait {

    /**
     * Date avenant.
     *
     * @var DateTime|null
     */
    private $dateAvenant;

    /**
     * Get the date avenant.
     *
     * @return DateTime|null Returns the date avenant.
     */
    public function getDateAvenant() {
        return $this->dateAvenant;
    }

    /**
     * Set the date avenant.
     *
     * @param DateTime|null $dateAvenant The date avenant.
     */
    public function setDateAvenant(DateTime $dateAvenant = null) {
        $this->dateAvenant = $dateAvenant;
        return $this;
    }
}
