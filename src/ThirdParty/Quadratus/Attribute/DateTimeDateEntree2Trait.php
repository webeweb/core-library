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
 * Date entree2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEntree2Trait {

    /**
     * Date entree2.
     *
     * @var DateTime|null
     */
    private $dateEntree2;

    /**
     * Get the date entree2.
     *
     * @return DateTime|null Returns the date entree2.
     */
    public function getDateEntree2() {
        return $this->dateEntree2;
    }

    /**
     * Set the date entree2.
     *
     * @param DateTime|null $dateEntree2 The date entree2.
     */
    public function setDateEntree2(DateTime $dateEntree2 = null) {
        $this->dateEntree2 = $dateEntree2;
        return $this;
    }
}
