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
 * Date deb prof trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebProfTrait {

    /**
     * Date deb prof.
     *
     * @var DateTime|null
     */
    private $dateDebProf;

    /**
     * Get the date deb prof.
     *
     * @return DateTime|null Returns the date deb prof.
     */
    public function getDateDebProf() {
        return $this->dateDebProf;
    }

    /**
     * Set the date deb prof.
     *
     * @param DateTime|null $dateDebProf The date deb prof.
     */
    public function setDateDebProf(DateTime $dateDebProf = null) {
        $this->dateDebProf = $dateDebProf;
        return $this;
    }
}
