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
 * Date fin vie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinVieTrait {

    /**
     * Date fin vie.
     *
     * @var DateTime|null
     */
    private $dateFinVie;

    /**
     * Get the date fin vie.
     *
     * @return DateTime|null Returns the date fin vie.
     */
    public function getDateFinVie() {
        return $this->dateFinVie;
    }

    /**
     * Set the date fin vie.
     *
     * @param DateTime|null $dateFinVie The date fin vie.
     */
    public function setDateFinVie(DateTime $dateFinVie = null) {
        $this->dateFinVie = $dateFinVie;
        return $this;
    }
}
