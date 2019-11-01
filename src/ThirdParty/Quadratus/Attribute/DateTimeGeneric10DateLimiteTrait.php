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
 * Generic10 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric10DateLimiteTrait {

    /**
     * Generic10 date limite.
     *
     * @var DateTime|null
     */
    private $generic10DateLimite;

    /**
     * Get the generic10 date limite.
     *
     * @return DateTime|null Returns the generic10 date limite.
     */
    public function getGeneric10DateLimite() {
        return $this->generic10DateLimite;
    }

    /**
     * Set the generic10 date limite.
     *
     * @param DateTime|null $generic10DateLimite The generic10 date limite.
     */
    public function setGeneric10DateLimite(DateTime $generic10DateLimite = null) {
        $this->generic10DateLimite = $generic10DateLimite;
        return $this;
    }
}
