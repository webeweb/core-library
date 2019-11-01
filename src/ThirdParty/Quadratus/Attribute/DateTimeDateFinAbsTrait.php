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
 * Date fin abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinAbsTrait {

    /**
     * Date fin abs.
     *
     * @var DateTime|null
     */
    private $dateFinAbs;

    /**
     * Get the date fin abs.
     *
     * @return DateTime|null Returns the date fin abs.
     */
    public function getDateFinAbs() {
        return $this->dateFinAbs;
    }

    /**
     * Set the date fin abs.
     *
     * @param DateTime|null $dateFinAbs The date fin abs.
     */
    public function setDateFinAbs(DateTime $dateFinAbs = null) {
        $this->dateFinAbs = $dateFinAbs;
        return $this;
    }
}
