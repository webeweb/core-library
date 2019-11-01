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
 * Date allegement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAllegementTrait {

    /**
     * Date allegement.
     *
     * @var DateTime|null
     */
    private $dateAllegement;

    /**
     * Get the date allegement.
     *
     * @return DateTime|null Returns the date allegement.
     */
    public function getDateAllegement() {
        return $this->dateAllegement;
    }

    /**
     * Set the date allegement.
     *
     * @param DateTime|null $dateAllegement The date allegement.
     */
    public function setDateAllegement(DateTime $dateAllegement = null) {
        $this->dateAllegement = $dateAllegement;
        return $this;
    }
}
