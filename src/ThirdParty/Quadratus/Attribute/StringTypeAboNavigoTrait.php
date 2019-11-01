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
 * Type abo navigo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAboNavigoTrait {

    /**
     * Type abo navigo.
     *
     * @var string
     */
    private $typeAboNavigo;

    /**
     * Get the type abo navigo.
     *
     * @return string Returns the type abo navigo.
     */
    public function getTypeAboNavigo() {
        return $this->typeAboNavigo;
    }

    /**
     * Set the type abo navigo.
     *
     * @param string $typeAboNavigo The type abo navigo.
     */
    public function setTypeAboNavigo($typeAboNavigo) {
        $this->typeAboNavigo = $typeAboNavigo;
        return $this;
    }
}
