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
 * Code categorie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCategorieTrait {

    /**
     * Code categorie.
     *
     * @var string
     */
    private $codeCategorie;

    /**
     * Get the code categorie.
     *
     * @return string Returns the code categorie.
     */
    public function getCodeCategorie() {
        return $this->codeCategorie;
    }

    /**
     * Set the code categorie.
     *
     * @param string $codeCategorie The code categorie.
     */
    public function setCodeCategorie($codeCategorie) {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }
}
