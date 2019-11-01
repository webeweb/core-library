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
 * Es code abs entree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEsCodeAbsEntreeTrait {

    /**
     * Es code abs entree.
     *
     * @var string
     */
    private $esCodeAbsEntree;

    /**
     * Get the es code abs entree.
     *
     * @return string Returns the es code abs entree.
     */
    public function getEsCodeAbsEntree() {
        return $this->esCodeAbsEntree;
    }

    /**
     * Set the es code abs entree.
     *
     * @param string $esCodeAbsEntree The es code abs entree.
     */
    public function setEsCodeAbsEntree($esCodeAbsEntree) {
        $this->esCodeAbsEntree = $esCodeAbsEntree;
        return $this;
    }
}
