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
 * Prixbloque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixbloqueTrait {

    /**
     * Prixbloque.
     *
     * @var bool
     */
    private $prixbloque;

    /**
     * Get the prixbloque.
     *
     * @return bool Returns the prixbloque.
     */
    public function getPrixbloque() {
        return $this->prixbloque;
    }

    /**
     * Set the prixbloque.
     *
     * @param bool $prixbloque The prixbloque.
     */
    public function setPrixbloque($prixbloque) {
        $this->prixbloque = $prixbloque;
        return $this;
    }
}
