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
 * Cloture date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeClotureDateTrait {

    /**
     * Cloture date.
     *
     * @var DateTime|null
     */
    private $clotureDate;

    /**
     * Get the cloture date.
     *
     * @return DateTime|null Returns the cloture date.
     */
    public function getClotureDate() {
        return $this->clotureDate;
    }

    /**
     * Set the cloture date.
     *
     * @param DateTime|null $clotureDate The cloture date.
     */
    public function setClotureDate(DateTime $clotureDate = null) {
        $this->clotureDate = $clotureDate;
        return $this;
    }
}
