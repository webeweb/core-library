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
 * Date validation nd f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValidationNdFTrait {

    /**
     * Date validation nd f.
     *
     * @var DateTime|null
     */
    private $dateValidationNdF;

    /**
     * Get the date validation nd f.
     *
     * @return DateTime|null Returns the date validation nd f.
     */
    public function getDateValidationNdF() {
        return $this->dateValidationNdF;
    }

    /**
     * Set the date validation nd f.
     *
     * @param DateTime|null $dateValidationNdF The date validation nd f.
     */
    public function setDateValidationNdF(DateTime $dateValidationNdF = null) {
        $this->dateValidationNdF = $dateValidationNdF;
        return $this;
    }
}
