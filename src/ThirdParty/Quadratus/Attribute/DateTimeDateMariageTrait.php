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
 * Date mariage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateMariageTrait {

    /**
     * Date mariage.
     *
     * @var DateTime|null
     */
    private $dateMariage;

    /**
     * Get the date mariage.
     *
     * @return DateTime|null Returns the date mariage.
     */
    public function getDateMariage() {
        return $this->dateMariage;
    }

    /**
     * Set the date mariage.
     *
     * @param DateTime|null $dateMariage The date mariage.
     */
    public function setDateMariage(DateTime $dateMariage = null) {
        $this->dateMariage = $dateMariage;
        return $this;
    }
}
