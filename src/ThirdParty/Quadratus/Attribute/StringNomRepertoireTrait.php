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
 * Nom repertoire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomRepertoireTrait {

    /**
     * Nom repertoire.
     *
     * @var string
     */
    private $nomRepertoire;

    /**
     * Get the nom repertoire.
     *
     * @return string Returns the nom repertoire.
     */
    public function getNomRepertoire() {
        return $this->nomRepertoire;
    }

    /**
     * Set the nom repertoire.
     *
     * @param string $nomRepertoire The nom repertoire.
     */
    public function setNomRepertoire($nomRepertoire) {
        $this->nomRepertoire = $nomRepertoire;
        return $this;
    }
}
