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
 * Nb br trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbBrTrait {

    /**
     * Nb br.
     *
     * @var string
     */
    private $nbBr;

    /**
     * Get the nb br.
     *
     * @return string Returns the nb br.
     */
    public function getNbBr() {
        return $this->nbBr;
    }

    /**
     * Set the nb br.
     *
     * @param string $nbBr The nb br.
     */
    public function setNbBr($nbBr) {
        $this->nbBr = $nbBr;
        return $this;
    }
}
