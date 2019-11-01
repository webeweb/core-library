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
 * Date visite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateVisiteTrait {

    /**
     * Date visite.
     *
     * @var DateTime|null
     */
    private $dateVisite;

    /**
     * Get the date visite.
     *
     * @return DateTime|null Returns the date visite.
     */
    public function getDateVisite() {
        return $this->dateVisite;
    }

    /**
     * Set the date visite.
     *
     * @param DateTime|null $dateVisite The date visite.
     */
    public function setDateVisite(DateTime $dateVisite = null) {
        $this->dateVisite = $dateVisite;
        return $this;
    }
}
