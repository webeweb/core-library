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
 * Code decalage paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDecalagePaieTrait {

    /**
     * Code decalage paie.
     *
     * @var string
     */
    private $codeDecalagePaie;

    /**
     * Get the code decalage paie.
     *
     * @return string Returns the code decalage paie.
     */
    public function getCodeDecalagePaie() {
        return $this->codeDecalagePaie;
    }

    /**
     * Set the code decalage paie.
     *
     * @param string $codeDecalagePaie The code decalage paie.
     */
    public function setCodeDecalagePaie($codeDecalagePaie) {
        $this->codeDecalagePaie = $codeDecalagePaie;
        return $this;
    }
}
