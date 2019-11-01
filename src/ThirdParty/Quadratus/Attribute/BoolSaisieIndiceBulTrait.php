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
 * Saisie indice bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieIndiceBulTrait {

    /**
     * Saisie indice bul.
     *
     * @var bool
     */
    private $saisieIndiceBul;

    /**
     * Get the saisie indice bul.
     *
     * @return bool Returns the saisie indice bul.
     */
    public function getSaisieIndiceBul() {
        return $this->saisieIndiceBul;
    }

    /**
     * Set the saisie indice bul.
     *
     * @param bool $saisieIndiceBul The saisie indice bul.
     */
    public function setSaisieIndiceBul($saisieIndiceBul) {
        $this->saisieIndiceBul = $saisieIndiceBul;
        return $this;
    }
}
