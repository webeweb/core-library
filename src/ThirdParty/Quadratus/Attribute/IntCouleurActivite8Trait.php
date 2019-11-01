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
 * Couleur activite8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite8Trait {

    /**
     * Couleur activite8.
     *
     * @var int
     */
    private $couleurActivite8;

    /**
     * Get the couleur activite8.
     *
     * @return int Returns the couleur activite8.
     */
    public function getCouleurActivite8() {
        return $this->couleurActivite8;
    }

    /**
     * Set the couleur activite8.
     *
     * @param int $couleurActivite8 The couleur activite8.
     */
    public function setCouleurActivite8($couleurActivite8) {
        $this->couleurActivite8 = $couleurActivite8;
        return $this;
    }
}
