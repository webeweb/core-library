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
 * Date adhesion cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAdhesionCgaTrait {

    /**
     * Date adhesion cga.
     *
     * @var DateTime|null
     */
    private $dateAdhesionCga;

    /**
     * Get the date adhesion cga.
     *
     * @return DateTime|null Returns the date adhesion cga.
     */
    public function getDateAdhesionCga() {
        return $this->dateAdhesionCga;
    }

    /**
     * Set the date adhesion cga.
     *
     * @param DateTime|null $dateAdhesionCga The date adhesion cga.
     */
    public function setDateAdhesionCga(DateTime $dateAdhesionCga = null) {
        $this->dateAdhesionCga = $dateAdhesionCga;
        return $this;
    }
}
