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
 * Generic6 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric6DateLimiteTrait {

    /**
     * Generic6 date limite.
     *
     * @var DateTime|null
     */
    private $generic6DateLimite;

    /**
     * Get the generic6 date limite.
     *
     * @return DateTime|null Returns the generic6 date limite.
     */
    public function getGeneric6DateLimite() {
        return $this->generic6DateLimite;
    }

    /**
     * Set the generic6 date limite.
     *
     * @param DateTime|null $generic6DateLimite The generic6 date limite.
     */
    public function setGeneric6DateLimite(DateTime $generic6DateLimite = null) {
        $this->generic6DateLimite = $generic6DateLimite;
        return $this;
    }
}
