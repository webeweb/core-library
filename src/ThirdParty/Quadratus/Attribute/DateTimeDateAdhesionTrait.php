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
 * Date adhesion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAdhesionTrait {

    /**
     * Date adhesion.
     *
     * @var DateTime|null
     */
    private $dateAdhesion;

    /**
     * Get the date adhesion.
     *
     * @return DateTime|null Returns the date adhesion.
     */
    public function getDateAdhesion() {
        return $this->dateAdhesion;
    }

    /**
     * Set the date adhesion.
     *
     * @param DateTime|null $dateAdhesion The date adhesion.
     */
    public function setDateAdhesion(DateTime $dateAdhesion = null) {
        $this->dateAdhesion = $dateAdhesion;
        return $this;
    }
}
