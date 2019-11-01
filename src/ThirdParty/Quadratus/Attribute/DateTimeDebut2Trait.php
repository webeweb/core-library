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
 * Debut2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebut2Trait {

    /**
     * Debut2.
     *
     * @var DateTime|null
     */
    private $debut2;

    /**
     * Get the debut2.
     *
     * @return DateTime|null Returns the debut2.
     */
    public function getDebut2() {
        return $this->debut2;
    }

    /**
     * Set the debut2.
     *
     * @param DateTime|null $debut2 The debut2.
     */
    public function setDebut2(DateTime $debut2 = null) {
        $this->debut2 = $debut2;
        return $this;
    }
}
