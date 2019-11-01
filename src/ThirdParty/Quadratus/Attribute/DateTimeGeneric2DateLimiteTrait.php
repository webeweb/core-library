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
 * Generic2 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric2DateLimiteTrait {

    /**
     * Generic2 date limite.
     *
     * @var DateTime|null
     */
    private $generic2DateLimite;

    /**
     * Get the generic2 date limite.
     *
     * @return DateTime|null Returns the generic2 date limite.
     */
    public function getGeneric2DateLimite() {
        return $this->generic2DateLimite;
    }

    /**
     * Set the generic2 date limite.
     *
     * @param DateTime|null $generic2DateLimite The generic2 date limite.
     */
    public function setGeneric2DateLimite(DateTime $generic2DateLimite = null) {
        $this->generic2DateLimite = $generic2DateLimite;
        return $this;
    }
}
