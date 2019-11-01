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
 * Etiq masque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtiqMasqueTrait {

    /**
     * Etiq masque.
     *
     * @var bool
     */
    private $etiqMasque;

    /**
     * Get the etiq masque.
     *
     * @return bool Returns the etiq masque.
     */
    public function getEtiqMasque() {
        return $this->etiqMasque;
    }

    /**
     * Set the etiq masque.
     *
     * @param bool $etiqMasque The etiq masque.
     */
    public function setEtiqMasque($etiqMasque) {
        $this->etiqMasque = $etiqMasque;
        return $this;
    }
}
