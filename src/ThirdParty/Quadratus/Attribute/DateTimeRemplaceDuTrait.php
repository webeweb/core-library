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
 * Remplace du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeRemplaceDuTrait {

    /**
     * Remplace du.
     *
     * @var DateTime|null
     */
    private $remplaceDu;

    /**
     * Get the remplace du.
     *
     * @return DateTime|null Returns the remplace du.
     */
    public function getRemplaceDu() {
        return $this->remplaceDu;
    }

    /**
     * Set the remplace du.
     *
     * @param DateTime|null $remplaceDu The remplace du.
     */
    public function setRemplaceDu(DateTime $remplaceDu = null) {
        $this->remplaceDu = $remplaceDu;
        return $this;
    }
}
