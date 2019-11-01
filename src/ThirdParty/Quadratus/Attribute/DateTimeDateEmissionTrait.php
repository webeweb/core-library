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
 * Date emission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEmissionTrait {

    /**
     * Date emission.
     *
     * @var DateTime|null
     */
    private $dateEmission;

    /**
     * Get the date emission.
     *
     * @return DateTime|null Returns the date emission.
     */
    public function getDateEmission() {
        return $this->dateEmission;
    }

    /**
     * Set the date emission.
     *
     * @param DateTime|null $dateEmission The date emission.
     */
    public function setDateEmission(DateTime $dateEmission = null) {
        $this->dateEmission = $dateEmission;
        return $this;
    }
}
