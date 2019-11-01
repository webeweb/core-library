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
 * Date effet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEffetTrait {

    /**
     * Date effet.
     *
     * @var DateTime|null
     */
    private $dateEffet;

    /**
     * Get the date effet.
     *
     * @return DateTime|null Returns the date effet.
     */
    public function getDateEffet() {
        return $this->dateEffet;
    }

    /**
     * Set the date effet.
     *
     * @param DateTime|null $dateEffet The date effet.
     */
    public function setDateEffet(DateTime $dateEffet = null) {
        $this->dateEffet = $dateEffet;
        return $this;
    }
}
