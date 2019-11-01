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
 * Date validation tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValidationTpTrait {

    /**
     * Date validation tp.
     *
     * @var DateTime|null
     */
    private $dateValidationTp;

    /**
     * Get the date validation tp.
     *
     * @return DateTime|null Returns the date validation tp.
     */
    public function getDateValidationTp() {
        return $this->dateValidationTp;
    }

    /**
     * Set the date validation tp.
     *
     * @param DateTime|null $dateValidationTp The date validation tp.
     */
    public function setDateValidationTp(DateTime $dateValidationTp = null) {
        $this->dateValidationTp = $dateValidationTp;
        return $this;
    }
}
