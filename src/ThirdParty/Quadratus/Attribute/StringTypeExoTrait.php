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
 * Type exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeExoTrait {

    /**
     * Type exo.
     *
     * @var string
     */
    private $typeExo;

    /**
     * Get the type exo.
     *
     * @return string Returns the type exo.
     */
    public function getTypeExo() {
        return $this->typeExo;
    }

    /**
     * Set the type exo.
     *
     * @param string $typeExo The type exo.
     */
    public function setTypeExo($typeExo) {
        $this->typeExo = $typeExo;
        return $this;
    }
}
