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
 * Acces articles consommes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesArticlesConsommesTrait {

    /**
     * Acces articles consommes.
     *
     * @var bool
     */
    private $accesArticlesConsommes;

    /**
     * Get the acces articles consommes.
     *
     * @return bool Returns the acces articles consommes.
     */
    public function getAccesArticlesConsommes() {
        return $this->accesArticlesConsommes;
    }

    /**
     * Set the acces articles consommes.
     *
     * @param bool $accesArticlesConsommes The acces articles consommes.
     */
    public function setAccesArticlesConsommes($accesArticlesConsommes) {
        $this->accesArticlesConsommes = $accesArticlesConsommes;
        return $this;
    }
}
