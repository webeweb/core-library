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
 * Type gestion bal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeGestionBalTrait {

    /**
     * Type gestion bal.
     *
     * @var string
     */
    private $typeGestionBal;

    /**
     * Get the type gestion bal.
     *
     * @return string Returns the type gestion bal.
     */
    public function getTypeGestionBal() {
        return $this->typeGestionBal;
    }

    /**
     * Set the type gestion bal.
     *
     * @param string $typeGestionBal The type gestion bal.
     */
    public function setTypeGestionBal($typeGestionBal) {
        $this->typeGestionBal = $typeGestionBal;
        return $this;
    }
}
