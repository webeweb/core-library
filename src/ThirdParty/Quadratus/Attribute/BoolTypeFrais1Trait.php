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
 * Type frais1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeFrais1Trait {

    /**
     * Type frais1.
     *
     * @var bool
     */
    private $typeFrais1;

    /**
     * Get the type frais1.
     *
     * @return bool Returns the type frais1.
     */
    public function getTypeFrais1() {
        return $this->typeFrais1;
    }

    /**
     * Set the type frais1.
     *
     * @param bool $typeFrais1 The type frais1.
     */
    public function setTypeFrais1($typeFrais1) {
        $this->typeFrais1 = $typeFrais1;
        return $this;
    }
}
