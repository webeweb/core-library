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
 * Generic8 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric8DateLimiteTrait {

    /**
     * Generic8 date limite.
     *
     * @var DateTime|null
     */
    private $generic8DateLimite;

    /**
     * Get the generic8 date limite.
     *
     * @return DateTime|null Returns the generic8 date limite.
     */
    public function getGeneric8DateLimite() {
        return $this->generic8DateLimite;
    }

    /**
     * Set the generic8 date limite.
     *
     * @param DateTime|null $generic8DateLimite The generic8 date limite.
     */
    public function setGeneric8DateLimite(DateTime $generic8DateLimite = null) {
        $this->generic8DateLimite = $generic8DateLimite;
        return $this;
    }
}
