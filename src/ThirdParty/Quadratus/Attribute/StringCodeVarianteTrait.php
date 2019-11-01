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
 * Code variante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVarianteTrait {

    /**
     * Code variante.
     *
     * @var string
     */
    private $codeVariante;

    /**
     * Get the code variante.
     *
     * @return string Returns the code variante.
     */
    public function getCodeVariante() {
        return $this->codeVariante;
    }

    /**
     * Set the code variante.
     *
     * @param string $codeVariante The code variante.
     */
    public function setCodeVariante($codeVariante) {
        $this->codeVariante = $codeVariante;
        return $this;
    }
}
