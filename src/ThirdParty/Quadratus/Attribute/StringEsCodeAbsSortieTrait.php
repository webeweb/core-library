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
 * Es code abs sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEsCodeAbsSortieTrait {

    /**
     * Es code abs sortie.
     *
     * @var string
     */
    private $esCodeAbsSortie;

    /**
     * Get the es code abs sortie.
     *
     * @return string Returns the es code abs sortie.
     */
    public function getEsCodeAbsSortie() {
        return $this->esCodeAbsSortie;
    }

    /**
     * Set the es code abs sortie.
     *
     * @param string $esCodeAbsSortie The es code abs sortie.
     */
    public function setEsCodeAbsSortie($esCodeAbsSortie) {
        $this->esCodeAbsSortie = $esCodeAbsSortie;
        return $this;
    }
}
