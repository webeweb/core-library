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
 * Type frais2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeFrais2Trait {

    /**
     * Type frais2.
     *
     * @var bool
     */
    private $typeFrais2;

    /**
     * Get the type frais2.
     *
     * @return bool Returns the type frais2.
     */
    public function getTypeFrais2() {
        return $this->typeFrais2;
    }

    /**
     * Set the type frais2.
     *
     * @param bool $typeFrais2 The type frais2.
     */
    public function setTypeFrais2($typeFrais2) {
        $this->typeFrais2 = $typeFrais2;
        return $this;
    }
}
