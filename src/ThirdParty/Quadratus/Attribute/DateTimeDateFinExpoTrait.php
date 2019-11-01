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
 * Date fin expo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinExpoTrait {

    /**
     * Date fin expo.
     *
     * @var DateTime|null
     */
    private $dateFinExpo;

    /**
     * Get the date fin expo.
     *
     * @return DateTime|null Returns the date fin expo.
     */
    public function getDateFinExpo() {
        return $this->dateFinExpo;
    }

    /**
     * Set the date fin expo.
     *
     * @param DateTime|null $dateFinExpo The date fin expo.
     */
    public function setDateFinExpo(DateTime $dateFinExpo = null) {
        $this->dateFinExpo = $dateFinExpo;
        return $this;
    }
}
