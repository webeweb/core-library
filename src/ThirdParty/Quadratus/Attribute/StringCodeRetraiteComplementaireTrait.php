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
 * Code retraite complementaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRetraiteComplementaireTrait {

    /**
     * Code retraite complementaire.
     *
     * @var string
     */
    private $codeRetraiteComplementaire;

    /**
     * Get the code retraite complementaire.
     *
     * @return string Returns the code retraite complementaire.
     */
    public function getCodeRetraiteComplementaire() {
        return $this->codeRetraiteComplementaire;
    }

    /**
     * Set the code retraite complementaire.
     *
     * @param string $codeRetraiteComplementaire The code retraite complementaire.
     */
    public function setCodeRetraiteComplementaire($codeRetraiteComplementaire) {
        $this->codeRetraiteComplementaire = $codeRetraiteComplementaire;
        return $this;
    }
}
