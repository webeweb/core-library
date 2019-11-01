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
 * Type bonif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBonifTrait {

    /**
     * Type bonif.
     *
     * @var string
     */
    private $typeBonif;

    /**
     * Get the type bonif.
     *
     * @return string Returns the type bonif.
     */
    public function getTypeBonif() {
        return $this->typeBonif;
    }

    /**
     * Set the type bonif.
     *
     * @param string $typeBonif The type bonif.
     */
    public function setTypeBonif($typeBonif) {
        $this->typeBonif = $typeBonif;
        return $this;
    }
}
