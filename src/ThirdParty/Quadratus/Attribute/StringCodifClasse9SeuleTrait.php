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
 * Codif classe9 seule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodifClasse9SeuleTrait {

    /**
     * Codif classe9 seule.
     *
     * @var string
     */
    private $codifClasse9Seule;

    /**
     * Get the codif classe9 seule.
     *
     * @return string Returns the codif classe9 seule.
     */
    public function getCodifClasse9Seule() {
        return $this->codifClasse9Seule;
    }

    /**
     * Set the codif classe9 seule.
     *
     * @param string $codifClasse9Seule The codif classe9 seule.
     */
    public function setCodifClasse9Seule($codifClasse9Seule) {
        $this->codifClasse9Seule = $codifClasse9Seule;
        return $this;
    }
}
