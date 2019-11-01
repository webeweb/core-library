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
 * Generic9 date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeGeneric9DateLimiteTrait {

    /**
     * Generic9 date limite.
     *
     * @var DateTime|null
     */
    private $generic9DateLimite;

    /**
     * Get the generic9 date limite.
     *
     * @return DateTime|null Returns the generic9 date limite.
     */
    public function getGeneric9DateLimite() {
        return $this->generic9DateLimite;
    }

    /**
     * Set the generic9 date limite.
     *
     * @param DateTime|null $generic9DateLimite The generic9 date limite.
     */
    public function setGeneric9DateLimite(DateTime $generic9DateLimite = null) {
        $this->generic9DateLimite = $generic9DateLimite;
        return $this;
    }
}
