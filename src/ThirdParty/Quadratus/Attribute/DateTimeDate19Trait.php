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
 * Date19 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate19Trait {

    /**
     * Date19.
     *
     * @var DateTime|null
     */
    private $date19;

    /**
     * Get the date19.
     *
     * @return DateTime|null Returns the date19.
     */
    public function getDate19() {
        return $this->date19;
    }

    /**
     * Set the date19.
     *
     * @param DateTime|null $date19 The date19.
     */
    public function setDate19(DateTime $date19 = null) {
        $this->date19 = $date19;
        return $this;
    }
}
