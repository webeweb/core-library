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
 * Date sys validation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSysValidationTrait {

    /**
     * Date sys validation.
     *
     * @var DateTime|null
     */
    private $dateSysValidation;

    /**
     * Get the date sys validation.
     *
     * @return DateTime|null Returns the date sys validation.
     */
    public function getDateSysValidation() {
        return $this->dateSysValidation;
    }

    /**
     * Set the date sys validation.
     *
     * @param DateTime|null $dateSysValidation The date sys validation.
     */
    public function setDateSysValidation(DateTime $dateSysValidation = null) {
        $this->dateSysValidation = $dateSysValidation;
        return $this;
    }
}
