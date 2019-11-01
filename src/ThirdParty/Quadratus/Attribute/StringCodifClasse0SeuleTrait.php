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
 * Codif classe0 seule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodifClasse0SeuleTrait {

    /**
     * Codif classe0 seule.
     *
     * @var string
     */
    private $codifClasse0Seule;

    /**
     * Get the codif classe0 seule.
     *
     * @return string Returns the codif classe0 seule.
     */
    public function getCodifClasse0Seule() {
        return $this->codifClasse0Seule;
    }

    /**
     * Set the codif classe0 seule.
     *
     * @param string $codifClasse0Seule The codif classe0 seule.
     */
    public function setCodifClasse0Seule($codifClasse0Seule) {
        $this->codifClasse0Seule = $codifClasse0Seule;
        return $this;
    }
}
