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
 * Couleur activite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite2Trait {

    /**
     * Couleur activite2.
     *
     * @var int
     */
    private $couleurActivite2;

    /**
     * Get the couleur activite2.
     *
     * @return int Returns the couleur activite2.
     */
    public function getCouleurActivite2() {
        return $this->couleurActivite2;
    }

    /**
     * Set the couleur activite2.
     *
     * @param int $couleurActivite2 The couleur activite2.
     */
    public function setCouleurActivite2($couleurActivite2) {
        $this->couleurActivite2 = $couleurActivite2;
        return $this;
    }
}
