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
 * Codif classe0 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodifClasse0Trait {

    /**
     * Codif classe0.
     *
     * @var string
     */
    private $codifClasse0;

    /**
     * Get the codif classe0.
     *
     * @return string Returns the codif classe0.
     */
    public function getCodifClasse0() {
        return $this->codifClasse0;
    }

    /**
     * Set the codif classe0.
     *
     * @param string $codifClasse0 The codif classe0.
     */
    public function setCodifClasse0($codifClasse0) {
        $this->codifClasse0 = $codifClasse0;
        return $this;
    }
}
