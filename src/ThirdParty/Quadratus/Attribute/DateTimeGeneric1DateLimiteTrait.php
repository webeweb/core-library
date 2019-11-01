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
 * Generic1 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric1DateLimiteTrait {

    /**
     * Generic1 date limite.
     *
     * @var DateTime|null
     */
    private $generic1DateLimite;

    /**
     * Get the generic1 date limite.
     *
     * @return DateTime|null Returns the generic1 date limite.
     */
    public function getGeneric1DateLimite() {
        return $this->generic1DateLimite;
    }

    /**
     * Set the generic1 date limite.
     *
     * @param DateTime|null $generic1DateLimite The generic1 date limite.
     */
    public function setGeneric1DateLimite(DateTime $generic1DateLimite = null) {
        $this->generic1DateLimite = $generic1DateLimite;
        return $this;
    }
}
