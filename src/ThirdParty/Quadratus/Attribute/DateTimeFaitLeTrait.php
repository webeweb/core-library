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
 * Fait le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFaitLeTrait {

    /**
     * Fait le.
     *
     * @var DateTime|null
     */
    private $faitLe;

    /**
     * Get the fait le.
     *
     * @return DateTime|null Returns the fait le.
     */
    public function getFaitLe() {
        return $this->faitLe;
    }

    /**
     * Set the fait le.
     *
     * @param DateTime|null $faitLe The fait le.
     */
    public function setFaitLe(DateTime $faitLe = null) {
        $this->faitLe = $faitLe;
        return $this;
    }
}
