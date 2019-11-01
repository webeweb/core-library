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
 * Date valid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateValidTrait {

    /**
     * Date valid.
     *
     * @var DateTime|null
     */
    private $dateValid;

    /**
     * Get the date valid.
     *
     * @return DateTime|null Returns the date valid.
     */
    public function getDateValid() {
        return $this->dateValid;
    }

    /**
     * Set the date valid.
     *
     * @param DateTime|null $dateValid The date valid.
     */
    public function setDateValid(DateTime $dateValid = null) {
        $this->dateValid = $dateValid;
        return $this;
    }
}
