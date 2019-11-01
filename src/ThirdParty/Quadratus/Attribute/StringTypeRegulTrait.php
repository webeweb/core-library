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
 * Type regul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRegulTrait {

    /**
     * Type regul.
     *
     * @var string
     */
    private $typeRegul;

    /**
     * Get the type regul.
     *
     * @return string Returns the type regul.
     */
    public function getTypeRegul() {
        return $this->typeRegul;
    }

    /**
     * Set the type regul.
     *
     * @param string $typeRegul The type regul.
     */
    public function setTypeRegul($typeRegul) {
        $this->typeRegul = $typeRegul;
        return $this;
    }
}
