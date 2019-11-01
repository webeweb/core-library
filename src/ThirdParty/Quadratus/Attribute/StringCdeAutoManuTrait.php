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
 * Cde auto manu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdeAutoManuTrait {

    /**
     * Cde auto manu.
     *
     * @var string
     */
    private $cdeAutoManu;

    /**
     * Get the cde auto manu.
     *
     * @return string Returns the cde auto manu.
     */
    public function getCdeAutoManu() {
        return $this->cdeAutoManu;
    }

    /**
     * Set the cde auto manu.
     *
     * @param string $cdeAutoManu The cde auto manu.
     */
    public function setCdeAutoManu($cdeAutoManu) {
        $this->cdeAutoManu = $cdeAutoManu;
        return $this;
    }
}
