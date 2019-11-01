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
 * Type frais3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeFrais3Trait {

    /**
     * Type frais3.
     *
     * @var bool
     */
    private $typeFrais3;

    /**
     * Get the type frais3.
     *
     * @return bool Returns the type frais3.
     */
    public function getTypeFrais3() {
        return $this->typeFrais3;
    }

    /**
     * Set the type frais3.
     *
     * @param bool $typeFrais3 The type frais3.
     */
    public function setTypeFrais3($typeFrais3) {
        $this->typeFrais3 = $typeFrais3;
        return $this;
    }
}
