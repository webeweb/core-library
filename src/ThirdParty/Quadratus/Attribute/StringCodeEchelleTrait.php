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
 * Code echelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEchelleTrait {

    /**
     * Code echelle.
     *
     * @var string
     */
    private $codeEchelle;

    /**
     * Get the code echelle.
     *
     * @return string Returns the code echelle.
     */
    public function getCodeEchelle() {
        return $this->codeEchelle;
    }

    /**
     * Set the code echelle.
     *
     * @param string $codeEchelle The code echelle.
     */
    public function setCodeEchelle($codeEchelle) {
        $this->codeEchelle = $codeEchelle;
        return $this;
    }
}
