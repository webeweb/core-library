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
 * Fait tab bord trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitTabBordTrait {

    /**
     * Fait tab bord.
     *
     * @var string
     */
    private $faitTabBord;

    /**
     * Get the fait tab bord.
     *
     * @return string Returns the fait tab bord.
     */
    public function getFaitTabBord() {
        return $this->faitTabBord;
    }

    /**
     * Set the fait tab bord.
     *
     * @param string $faitTabBord The fait tab bord.
     */
    public function setFaitTabBord($faitTabBord) {
        $this->faitTabBord = $faitTabBord;
        return $this;
    }
}
