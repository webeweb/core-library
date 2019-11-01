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
 * Per reference du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerReferenceDuTrait {

    /**
     * Per reference du.
     *
     * @var DateTime|null
     */
    private $perReferenceDu;

    /**
     * Get the per reference du.
     *
     * @return DateTime|null Returns the per reference du.
     */
    public function getPerReferenceDu() {
        return $this->perReferenceDu;
    }

    /**
     * Set the per reference du.
     *
     * @param DateTime|null $perReferenceDu The per reference du.
     */
    public function setPerReferenceDu(DateTime $perReferenceDu = null) {
        $this->perReferenceDu = $perReferenceDu;
        return $this;
    }
}
