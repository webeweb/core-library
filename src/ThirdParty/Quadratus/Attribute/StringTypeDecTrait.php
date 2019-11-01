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
 * Type dec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDecTrait {

    /**
     * Type dec.
     *
     * @var string
     */
    private $typeDec;

    /**
     * Get the type dec.
     *
     * @return string Returns the type dec.
     */
    public function getTypeDec() {
        return $this->typeDec;
    }

    /**
     * Set the type dec.
     *
     * @param string $typeDec The type dec.
     */
    public function setTypeDec($typeDec) {
        $this->typeDec = $typeDec;
        return $this;
    }
}
