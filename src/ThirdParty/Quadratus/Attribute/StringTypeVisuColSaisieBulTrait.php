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
 * Type visu col saisie bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeVisuColSaisieBulTrait {

    /**
     * Type visu col saisie bul.
     *
     * @var string
     */
    private $typeVisuColSaisieBul;

    /**
     * Get the type visu col saisie bul.
     *
     * @return string Returns the type visu col saisie bul.
     */
    public function getTypeVisuColSaisieBul() {
        return $this->typeVisuColSaisieBul;
    }

    /**
     * Set the type visu col saisie bul.
     *
     * @param string $typeVisuColSaisieBul The type visu col saisie bul.
     */
    public function setTypeVisuColSaisieBul($typeVisuColSaisieBul) {
        $this->typeVisuColSaisieBul = $typeVisuColSaisieBul;
        return $this;
    }
}
