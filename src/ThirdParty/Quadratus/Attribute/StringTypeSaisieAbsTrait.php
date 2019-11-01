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
 * Type saisie abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSaisieAbsTrait {

    /**
     * Type saisie abs.
     *
     * @var string
     */
    private $typeSaisieAbs;

    /**
     * Get the type saisie abs.
     *
     * @return string Returns the type saisie abs.
     */
    public function getTypeSaisieAbs() {
        return $this->typeSaisieAbs;
    }

    /**
     * Set the type saisie abs.
     *
     * @param string $typeSaisieAbs The type saisie abs.
     */
    public function setTypeSaisieAbs($typeSaisieAbs) {
        $this->typeSaisieAbs = $typeSaisieAbs;
        return $this;
    }
}
