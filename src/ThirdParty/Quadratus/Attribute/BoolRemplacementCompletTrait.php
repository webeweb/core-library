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
 * Remplacement complet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemplacementCompletTrait {

    /**
     * Remplacement complet.
     *
     * @var bool
     */
    private $remplacementComplet;

    /**
     * Get the remplacement complet.
     *
     * @return bool Returns the remplacement complet.
     */
    public function getRemplacementComplet() {
        return $this->remplacementComplet;
    }

    /**
     * Set the remplacement complet.
     *
     * @param bool $remplacementComplet The remplacement complet.
     */
    public function setRemplacementComplet($remplacementComplet) {
        $this->remplacementComplet = $remplacementComplet;
        return $this;
    }
}
