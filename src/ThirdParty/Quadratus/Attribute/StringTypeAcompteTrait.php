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
 * Type acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAcompteTrait {

    /**
     * Type acompte.
     *
     * @var string
     */
    private $typeAcompte;

    /**
     * Get the type acompte.
     *
     * @return string Returns the type acompte.
     */
    public function getTypeAcompte() {
        return $this->typeAcompte;
    }

    /**
     * Set the type acompte.
     *
     * @param string $typeAcompte The type acompte.
     */
    public function setTypeAcompte($typeAcompte) {
        $this->typeAcompte = $typeAcompte;
        return $this;
    }
}
