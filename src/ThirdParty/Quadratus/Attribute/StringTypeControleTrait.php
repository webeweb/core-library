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
 * Type controle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeControleTrait {

    /**
     * Type controle.
     *
     * @var string
     */
    private $typeControle;

    /**
     * Get the type controle.
     *
     * @return string Returns the type controle.
     */
    public function getTypeControle() {
        return $this->typeControle;
    }

    /**
     * Set the type controle.
     *
     * @param string $typeControle The type controle.
     */
    public function setTypeControle($typeControle) {
        $this->typeControle = $typeControle;
        return $this;
    }
}
