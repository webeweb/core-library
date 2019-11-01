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
 * Ouverture date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeOuvertureDateTrait {

    /**
     * Ouverture date.
     *
     * @var DateTime|null
     */
    private $ouvertureDate;

    /**
     * Get the ouverture date.
     *
     * @return DateTime|null Returns the ouverture date.
     */
    public function getOuvertureDate() {
        return $this->ouvertureDate;
    }

    /**
     * Set the ouverture date.
     *
     * @param DateTime|null $ouvertureDate The ouverture date.
     */
    public function setOuvertureDate(DateTime $ouvertureDate = null) {
        $this->ouvertureDate = $ouvertureDate;
        return $this;
    }
}
