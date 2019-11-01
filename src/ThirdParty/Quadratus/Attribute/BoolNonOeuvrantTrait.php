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
 * Non oeuvrant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonOeuvrantTrait {

    /**
     * Non oeuvrant.
     *
     * @var bool
     */
    private $nonOeuvrant;

    /**
     * Get the non oeuvrant.
     *
     * @return bool Returns the non oeuvrant.
     */
    public function getNonOeuvrant() {
        return $this->nonOeuvrant;
    }

    /**
     * Set the non oeuvrant.
     *
     * @param bool $nonOeuvrant The non oeuvrant.
     */
    public function setNonOeuvrant($nonOeuvrant) {
        $this->nonOeuvrant = $nonOeuvrant;
        return $this;
    }
}
