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
 * Nb max br trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbMaxBrTrait {

    /**
     * Nb max br.
     *
     * @var string
     */
    private $nbMaxBr;

    /**
     * Get the nb max br.
     *
     * @return string Returns the nb max br.
     */
    public function getNbMaxBr() {
        return $this->nbMaxBr;
    }

    /**
     * Set the nb max br.
     *
     * @param string $nbMaxBr The nb max br.
     */
    public function setNbMaxBr($nbMaxBr) {
        $this->nbMaxBr = $nbMaxBr;
        return $this;
    }
}
