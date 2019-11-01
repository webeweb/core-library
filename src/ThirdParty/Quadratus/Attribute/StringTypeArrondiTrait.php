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
 * Type arrondi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeArrondiTrait {

    /**
     * Type arrondi.
     *
     * @var string
     */
    private $typeArrondi;

    /**
     * Get the type arrondi.
     *
     * @return string Returns the type arrondi.
     */
    public function getTypeArrondi() {
        return $this->typeArrondi;
    }

    /**
     * Set the type arrondi.
     *
     * @param string $typeArrondi The type arrondi.
     */
    public function setTypeArrondi($typeArrondi) {
        $this->typeArrondi = $typeArrondi;
        return $this;
    }
}
