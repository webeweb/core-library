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
 * Generic5 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric5DateLimiteTrait {

    /**
     * Generic5 date limite.
     *
     * @var DateTime|null
     */
    private $generic5DateLimite;

    /**
     * Get the generic5 date limite.
     *
     * @return DateTime|null Returns the generic5 date limite.
     */
    public function getGeneric5DateLimite() {
        return $this->generic5DateLimite;
    }

    /**
     * Set the generic5 date limite.
     *
     * @param DateTime|null $generic5DateLimite The generic5 date limite.
     */
    public function setGeneric5DateLimite(DateTime $generic5DateLimite = null) {
        $this->generic5DateLimite = $generic5DateLimite;
        return $this;
    }
}
