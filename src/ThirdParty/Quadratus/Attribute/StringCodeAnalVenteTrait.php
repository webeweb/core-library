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
 * Code anal vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnalVenteTrait {

    /**
     * Code anal vente.
     *
     * @var string
     */
    private $codeAnalVente;

    /**
     * Get the code anal vente.
     *
     * @return string Returns the code anal vente.
     */
    public function getCodeAnalVente() {
        return $this->codeAnalVente;
    }

    /**
     * Set the code anal vente.
     *
     * @param string $codeAnalVente The code anal vente.
     */
    public function setCodeAnalVente($codeAnalVente) {
        $this->codeAnalVente = $codeAnalVente;
        return $this;
    }
}
