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
 * Date validation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValidationTrait {

    /**
     * Date validation.
     *
     * @var DateTime|null
     */
    private $dateValidation;

    /**
     * Get the date validation.
     *
     * @return DateTime|null Returns the date validation.
     */
    public function getDateValidation() {
        return $this->dateValidation;
    }

    /**
     * Set the date validation.
     *
     * @param DateTime|null $dateValidation The date validation.
     */
    public function setDateValidation(DateTime $dateValidation = null) {
        $this->dateValidation = $dateValidation;
        return $this;
    }
}
