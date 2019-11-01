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
 * Type arret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeArretTrait {

    /**
     * Type arret.
     *
     * @var string
     */
    private $typeArret;

    /**
     * Get the type arret.
     *
     * @return string Returns the type arret.
     */
    public function getTypeArret() {
        return $this->typeArret;
    }

    /**
     * Set the type arret.
     *
     * @param string $typeArret The type arret.
     */
    public function setTypeArret($typeArret) {
        $this->typeArret = $typeArret;
        return $this;
    }
}
