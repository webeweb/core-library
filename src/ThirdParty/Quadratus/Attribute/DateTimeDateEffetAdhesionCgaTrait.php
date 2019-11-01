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
 * Date effet adhesion cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEffetAdhesionCgaTrait {

    /**
     * Date effet adhesion cga.
     *
     * @var DateTime|null
     */
    private $dateEffetAdhesionCga;

    /**
     * Get the date effet adhesion cga.
     *
     * @return DateTime|null Returns the date effet adhesion cga.
     */
    public function getDateEffetAdhesionCga() {
        return $this->dateEffetAdhesionCga;
    }

    /**
     * Set the date effet adhesion cga.
     *
     * @param DateTime|null $dateEffetAdhesionCga The date effet adhesion cga.
     */
    public function setDateEffetAdhesionCga(DateTime $dateEffetAdhesionCga = null) {
        $this->dateEffetAdhesionCga = $dateEffetAdhesionCga;
        return $this;
    }
}
