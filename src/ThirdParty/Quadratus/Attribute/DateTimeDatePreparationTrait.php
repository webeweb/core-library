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
 * Date preparation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePreparationTrait {

    /**
     * Date preparation.
     *
     * @var DateTime|null
     */
    private $datePreparation;

    /**
     * Get the date preparation.
     *
     * @return DateTime|null Returns the date preparation.
     */
    public function getDatePreparation() {
        return $this->datePreparation;
    }

    /**
     * Set the date preparation.
     *
     * @param DateTime|null $datePreparation The date preparation.
     */
    public function setDatePreparation(DateTime $datePreparation = null) {
        $this->datePreparation = $datePreparation;
        return $this;
    }
}
