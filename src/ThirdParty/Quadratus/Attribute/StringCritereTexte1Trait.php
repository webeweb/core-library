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
 * Critere texte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereTexte1Trait {

    /**
     * Critere texte1.
     *
     * @var string
     */
    private $critereTexte1;

    /**
     * Get the critere texte1.
     *
     * @return string Returns the critere texte1.
     */
    public function getCritereTexte1() {
        return $this->critereTexte1;
    }

    /**
     * Set the critere texte1.
     *
     * @param string $critereTexte1 The critere texte1.
     */
    public function setCritereTexte1($critereTexte1) {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }
}
