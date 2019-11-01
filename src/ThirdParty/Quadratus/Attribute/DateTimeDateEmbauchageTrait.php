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
 * Date embauchage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEmbauchageTrait {

    /**
     * Date embauchage.
     *
     * @var DateTime|null
     */
    private $dateEmbauchage;

    /**
     * Get the date embauchage.
     *
     * @return DateTime|null Returns the date embauchage.
     */
    public function getDateEmbauchage() {
        return $this->dateEmbauchage;
    }

    /**
     * Set the date embauchage.
     *
     * @param DateTime|null $dateEmbauchage The date embauchage.
     */
    public function setDateEmbauchage(DateTime $dateEmbauchage = null) {
        $this->dateEmbauchage = $dateEmbauchage;
        return $this;
    }
}
