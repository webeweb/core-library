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
 * Debut1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebut1Trait {

    /**
     * Debut1.
     *
     * @var DateTime|null
     */
    private $debut1;

    /**
     * Get the debut1.
     *
     * @return DateTime|null Returns the debut1.
     */
    public function getDebut1() {
        return $this->debut1;
    }

    /**
     * Set the debut1.
     *
     * @param DateTime|null $debut1 The debut1.
     */
    public function setDebut1(DateTime $debut1 = null) {
        $this->debut1 = $debut1;
        return $this;
    }
}
