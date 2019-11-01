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
 * Generic3 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric3DateLimiteTrait {

    /**
     * Generic3 date limite.
     *
     * @var DateTime|null
     */
    private $generic3DateLimite;

    /**
     * Get the generic3 date limite.
     *
     * @return DateTime|null Returns the generic3 date limite.
     */
    public function getGeneric3DateLimite() {
        return $this->generic3DateLimite;
    }

    /**
     * Set the generic3 date limite.
     *
     * @param DateTime|null $generic3DateLimite The generic3 date limite.
     */
    public function setGeneric3DateLimite(DateTime $generic3DateLimite = null) {
        $this->generic3DateLimite = $generic3DateLimite;
        return $this;
    }
}
