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
 * Per fin3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerFin3Trait {

    /**
     * Per fin3.
     *
     * @var DateTime|null
     */
    private $perFin3;

    /**
     * Get the per fin3.
     *
     * @return DateTime|null Returns the per fin3.
     */
    public function getPerFin3() {
        return $this->perFin3;
    }

    /**
     * Set the per fin3.
     *
     * @param DateTime|null $perFin3 The per fin3.
     */
    public function setPerFin3(DateTime $perFin3 = null) {
        $this->perFin3 = $perFin3;
        return $this;
    }
}
