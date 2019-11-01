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
 * Type freq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeFreqTrait {

    /**
     * Type freq.
     *
     * @var string
     */
    private $typeFreq;

    /**
     * Get the type freq.
     *
     * @return string Returns the type freq.
     */
    public function getTypeFreq() {
        return $this->typeFreq;
    }

    /**
     * Set the type freq.
     *
     * @param string $typeFreq The type freq.
     */
    public function setTypeFreq($typeFreq) {
        $this->typeFreq = $typeFreq;
        return $this;
    }
}
