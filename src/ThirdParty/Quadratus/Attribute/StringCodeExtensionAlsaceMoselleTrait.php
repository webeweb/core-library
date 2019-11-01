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
 * Code extension alsace moselle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeExtensionAlsaceMoselleTrait {

    /**
     * Code extension alsace moselle.
     *
     * @var string
     */
    private $codeExtensionAlsaceMoselle;

    /**
     * Get the code extension alsace moselle.
     *
     * @return string Returns the code extension alsace moselle.
     */
    public function getCodeExtensionAlsaceMoselle() {
        return $this->codeExtensionAlsaceMoselle;
    }

    /**
     * Set the code extension alsace moselle.
     *
     * @param string $codeExtensionAlsaceMoselle The code extension alsace moselle.
     */
    public function setCodeExtensionAlsaceMoselle($codeExtensionAlsaceMoselle) {
        $this->codeExtensionAlsaceMoselle = $codeExtensionAlsaceMoselle;
        return $this;
    }
}
