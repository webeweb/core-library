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
 * Type he fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeHeFillonTrait {

    /**
     * Type he fillon.
     *
     * @var string
     */
    private $typeHeFillon;

    /**
     * Get the type he fillon.
     *
     * @return string Returns the type he fillon.
     */
    public function getTypeHeFillon() {
        return $this->typeHeFillon;
    }

    /**
     * Set the type he fillon.
     *
     * @param string $typeHeFillon The type he fillon.
     */
    public function setTypeHeFillon($typeHeFillon) {
        $this->typeHeFillon = $typeHeFillon;
        return $this;
    }
}
