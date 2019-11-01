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
 * Depuis web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDepuisWebTrait {

    /**
     * Depuis web.
     *
     * @var bool
     */
    private $depuisWeb;

    /**
     * Get the depuis web.
     *
     * @return bool Returns the depuis web.
     */
    public function getDepuisWeb() {
        return $this->depuisWeb;
    }

    /**
     * Set the depuis web.
     *
     * @param bool $depuisWeb The depuis web.
     */
    public function setDepuisWeb($depuisWeb) {
        $this->depuisWeb = $depuisWeb;
        return $this;
    }
}
