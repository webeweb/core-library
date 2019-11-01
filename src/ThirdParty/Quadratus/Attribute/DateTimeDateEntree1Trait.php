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
 * Date entree1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEntree1Trait {

    /**
     * Date entree1.
     *
     * @var DateTime|null
     */
    private $dateEntree1;

    /**
     * Get the date entree1.
     *
     * @return DateTime|null Returns the date entree1.
     */
    public function getDateEntree1() {
        return $this->dateEntree1;
    }

    /**
     * Set the date entree1.
     *
     * @param DateTime|null $dateEntree1 The date entree1.
     */
    public function setDateEntree1(DateTime $dateEntree1 = null) {
        $this->dateEntree1 = $dateEntree1;
        return $this;
    }
}
