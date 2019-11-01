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
 * Heure abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureAbsTrait {

    /**
     * Heure abs.
     *
     * @var DateTime|null
     */
    private $heureAbs;

    /**
     * Get the heure abs.
     *
     * @return DateTime|null Returns the heure abs.
     */
    public function getHeureAbs() {
        return $this->heureAbs;
    }

    /**
     * Set the heure abs.
     *
     * @param DateTime|null $heureAbs The heure abs.
     */
    public function setHeureAbs(DateTime $heureAbs = null) {
        $this->heureAbs = $heureAbs;
        return $this;
    }
}
