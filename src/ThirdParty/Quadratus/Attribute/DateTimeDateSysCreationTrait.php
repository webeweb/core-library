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
 * Date sys creation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSysCreationTrait {

    /**
     * Date sys creation.
     *
     * @var DateTime|null
     */
    private $dateSysCreation;

    /**
     * Get the date sys creation.
     *
     * @return DateTime|null Returns the date sys creation.
     */
    public function getDateSysCreation() {
        return $this->dateSysCreation;
    }

    /**
     * Set the date sys creation.
     *
     * @param DateTime|null $dateSysCreation The date sys creation.
     */
    public function setDateSysCreation(DateTime $dateSysCreation = null) {
        $this->dateSysCreation = $dateSysCreation;
        return $this;
    }
}
