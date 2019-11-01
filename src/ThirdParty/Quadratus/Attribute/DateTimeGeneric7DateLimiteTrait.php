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
 * Generic7 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric7DateLimiteTrait {

    /**
     * Generic7 date limite.
     *
     * @var DateTime|null
     */
    private $generic7DateLimite;

    /**
     * Get the generic7 date limite.
     *
     * @return DateTime|null Returns the generic7 date limite.
     */
    public function getGeneric7DateLimite() {
        return $this->generic7DateLimite;
    }

    /**
     * Set the generic7 date limite.
     *
     * @param DateTime|null $generic7DateLimite The generic7 date limite.
     */
    public function setGeneric7DateLimite(DateTime $generic7DateLimite = null) {
        $this->generic7DateLimite = $generic7DateLimite;
        return $this;
    }
}
