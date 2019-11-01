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
 * Crr date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCrrDateTrait {

    /**
     * Crr date.
     *
     * @var DateTime|null
     */
    private $crrDate;

    /**
     * Get the crr date.
     *
     * @return DateTime|null Returns the crr date.
     */
    public function getCrrDate() {
        return $this->crrDate;
    }

    /**
     * Set the crr date.
     *
     * @param DateTime|null $crrDate The crr date.
     */
    public function setCrrDate(DateTime $crrDate = null) {
        $this->crrDate = $crrDate;
        return $this;
    }
}
