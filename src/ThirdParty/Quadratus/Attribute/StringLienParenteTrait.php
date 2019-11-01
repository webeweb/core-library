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
 * Lien parente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLienParenteTrait {

    /**
     * Lien parente.
     *
     * @var string
     */
    private $lienParente;

    /**
     * Get the lien parente.
     *
     * @return string Returns the lien parente.
     */
    public function getLienParente() {
        return $this->lienParente;
    }

    /**
     * Set the lien parente.
     *
     * @param string $lienParente The lien parente.
     */
    public function setLienParente($lienParente) {
        $this->lienParente = $lienParente;
        return $this;
    }
}
