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
 * Isf date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeIsfDateLimiteTrait {

    /**
     * Isf date limite.
     *
     * @var DateTime|null
     */
    private $isfDateLimite;

    /**
     * Get the isf date limite.
     *
     * @return DateTime|null Returns the isf date limite.
     */
    public function getIsfDateLimite() {
        return $this->isfDateLimite;
    }

    /**
     * Set the isf date limite.
     *
     * @param DateTime|null $isfDateLimite The isf date limite.
     */
    public function setIsfDateLimite(DateTime $isfDateLimite = null) {
        $this->isfDateLimite = $isfDateLimite;
        return $this;
    }
}
