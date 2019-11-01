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
 * Date deb expo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebExpoTrait {

    /**
     * Date deb expo.
     *
     * @var DateTime|null
     */
    private $dateDebExpo;

    /**
     * Get the date deb expo.
     *
     * @return DateTime|null Returns the date deb expo.
     */
    public function getDateDebExpo() {
        return $this->dateDebExpo;
    }

    /**
     * Set the date deb expo.
     *
     * @param DateTime|null $dateDebExpo The date deb expo.
     */
    public function setDateDebExpo(DateTime $dateDebExpo = null) {
        $this->dateDebExpo = $dateDebExpo;
        return $this;
    }
}
