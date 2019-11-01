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
 * Gest texte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestTexteTrait {

    /**
     * Gest texte.
     *
     * @var bool
     */
    private $gestTexte;

    /**
     * Get the gest texte.
     *
     * @return bool Returns the gest texte.
     */
    public function getGestTexte() {
        return $this->gestTexte;
    }

    /**
     * Set the gest texte.
     *
     * @param bool $gestTexte The gest texte.
     */
    public function setGestTexte($gestTexte) {
        $this->gestTexte = $gestTexte;
        return $this;
    }
}
