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
 * Type remun hs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemunHsTrait {

    /**
     * Type remun hs.
     *
     * @var string
     */
    private $typeRemunHs;

    /**
     * Get the type remun hs.
     *
     * @return string Returns the type remun hs.
     */
    public function getTypeRemunHs() {
        return $this->typeRemunHs;
    }

    /**
     * Set the type remun hs.
     *
     * @param string $typeRemunHs The type remun hs.
     */
    public function setTypeRemunHs($typeRemunHs) {
        $this->typeRemunHs = $typeRemunHs;
        return $this;
    }
}
