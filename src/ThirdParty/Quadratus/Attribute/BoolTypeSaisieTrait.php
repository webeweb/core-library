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
 * Type saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeSaisieTrait {

    /**
     * Type saisie.
     *
     * @var bool
     */
    private $typeSaisie;

    /**
     * Get the type saisie.
     *
     * @return bool Returns the type saisie.
     */
    public function getTypeSaisie() {
        return $this->typeSaisie;
    }

    /**
     * Set the type saisie.
     *
     * @param bool $typeSaisie The type saisie.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
