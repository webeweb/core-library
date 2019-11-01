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
 * Categ tds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCategTdsTrait {

    /**
     * Categ tds.
     *
     * @var string
     */
    private $categTds;

    /**
     * Get the categ tds.
     *
     * @return string Returns the categ tds.
     */
    public function getCategTds() {
        return $this->categTds;
    }

    /**
     * Set the categ tds.
     *
     * @param string $categTds The categ tds.
     */
    public function setCategTds($categTds) {
        $this->categTds = $categTds;
        return $this;
    }
}
