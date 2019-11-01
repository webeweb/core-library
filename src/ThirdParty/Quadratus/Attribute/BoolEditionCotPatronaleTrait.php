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
 * Edition cot patronale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionCotPatronaleTrait {

    /**
     * Edition cot patronale.
     *
     * @var bool
     */
    private $editionCotPatronale;

    /**
     * Get the edition cot patronale.
     *
     * @return bool Returns the edition cot patronale.
     */
    public function getEditionCotPatronale() {
        return $this->editionCotPatronale;
    }

    /**
     * Set the edition cot patronale.
     *
     * @param bool $editionCotPatronale The edition cot patronale.
     */
    public function setEditionCotPatronale($editionCotPatronale) {
        $this->editionCotPatronale = $editionCotPatronale;
        return $this;
    }
}
