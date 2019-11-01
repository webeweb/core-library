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
 * Date seance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSeanceTrait {

    /**
     * Date seance.
     *
     * @var DateTime|null
     */
    private $dateSeance;

    /**
     * Get the date seance.
     *
     * @return DateTime|null Returns the date seance.
     */
    public function getDateSeance() {
        return $this->dateSeance;
    }

    /**
     * Set the date seance.
     *
     * @param DateTime|null $dateSeance The date seance.
     */
    public function setDateSeance(DateTime $dateSeance = null) {
        $this->dateSeance = $dateSeance;
        return $this;
    }
}
