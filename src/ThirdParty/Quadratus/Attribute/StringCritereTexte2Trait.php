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
 * Critere texte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereTexte2Trait {

    /**
     * Critere texte2.
     *
     * @var string
     */
    private $critereTexte2;

    /**
     * Get the critere texte2.
     *
     * @return string Returns the critere texte2.
     */
    public function getCritereTexte2() {
        return $this->critereTexte2;
    }

    /**
     * Set the critere texte2.
     *
     * @param string $critereTexte2 The critere texte2.
     */
    public function setCritereTexte2($critereTexte2) {
        $this->critereTexte2 = $critereTexte2;
        return $this;
    }
}
