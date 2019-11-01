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
 * Type suivi autre texte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSuiviAutreTexteTrait {

    /**
     * Type suivi autre texte.
     *
     * @var string
     */
    private $typeSuiviAutreTexte;

    /**
     * Get the type suivi autre texte.
     *
     * @return string Returns the type suivi autre texte.
     */
    public function getTypeSuiviAutreTexte() {
        return $this->typeSuiviAutreTexte;
    }

    /**
     * Set the type suivi autre texte.
     *
     * @param string $typeSuiviAutreTexte The type suivi autre texte.
     */
    public function setTypeSuiviAutreTexte($typeSuiviAutreTexte) {
        $this->typeSuiviAutreTexte = $typeSuiviAutreTexte;
        return $this;
    }
}
