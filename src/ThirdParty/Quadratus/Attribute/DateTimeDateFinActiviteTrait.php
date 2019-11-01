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
 * Date fin activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinActiviteTrait {

    /**
     * Date fin activite.
     *
     * @var DateTime|null
     */
    private $dateFinActivite;

    /**
     * Get the date fin activite.
     *
     * @return DateTime|null Returns the date fin activite.
     */
    public function getDateFinActivite() {
        return $this->dateFinActivite;
    }

    /**
     * Set the date fin activite.
     *
     * @param DateTime|null $dateFinActivite The date fin activite.
     */
    public function setDateFinActivite(DateTime $dateFinActivite = null) {
        $this->dateFinActivite = $dateFinActivite;
        return $this;
    }
}
