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

/**
 * Col pour sal ref trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringColPourSalRefTrait {

    /**
     * Col pour sal ref.
     *
     * @var string
     */
    private $colPourSalRef;

    /**
     * Get the col pour sal ref.
     *
     * @return string Returns the col pour sal ref.
     */
    public function getColPourSalRef() {
        return $this->colPourSalRef;
    }

    /**
     * Set the col pour sal ref.
     *
     * @param string $colPourSalRef The col pour sal ref.
     */
    public function setColPourSalRef($colPourSalRef) {
        $this->colPourSalRef = $colPourSalRef;
        return $this;
    }
}
