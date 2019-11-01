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
 * Generic4 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric4DateLimiteTrait {

    /**
     * Generic4 date limite.
     *
     * @var DateTime|null
     */
    private $generic4DateLimite;

    /**
     * Get the generic4 date limite.
     *
     * @return DateTime|null Returns the generic4 date limite.
     */
    public function getGeneric4DateLimite() {
        return $this->generic4DateLimite;
    }

    /**
     * Set the generic4 date limite.
     *
     * @param DateTime|null $generic4DateLimite The generic4 date limite.
     */
    public function setGeneric4DateLimite(DateTime $generic4DateLimite = null) {
        $this->generic4DateLimite = $generic4DateLimite;
        return $this;
    }
}
