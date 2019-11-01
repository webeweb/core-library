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
 * Code modele trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeModeleTrait {

    /**
     * Code modele.
     *
     * @var string
     */
    private $codeModele;

    /**
     * Get the code modele.
     *
     * @return string Returns the code modele.
     */
    public function getCodeModele() {
        return $this->codeModele;
    }

    /**
     * Set the code modele.
     *
     * @param string $codeModele The code modele.
     */
    public function setCodeModele($codeModele) {
        $this->codeModele = $codeModele;
        return $this;
    }
}
