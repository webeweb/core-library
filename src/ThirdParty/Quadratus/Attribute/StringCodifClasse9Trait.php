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
 * Codif classe9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodifClasse9Trait {

    /**
     * Codif classe9.
     *
     * @var string
     */
    private $codifClasse9;

    /**
     * Get the codif classe9.
     *
     * @return string Returns the codif classe9.
     */
    public function getCodifClasse9() {
        return $this->codifClasse9;
    }

    /**
     * Set the codif classe9.
     *
     * @param string $codifClasse9 The codif classe9.
     */
    public function setCodifClasse9($codifClasse9) {
        $this->codifClasse9 = $codifClasse9;
        return $this;
    }
}
