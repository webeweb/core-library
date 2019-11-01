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
 * Couleur activite4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite4Trait {

    /**
     * Couleur activite4.
     *
     * @var int
     */
    private $couleurActivite4;

    /**
     * Get the couleur activite4.
     *
     * @return int Returns the couleur activite4.
     */
    public function getCouleurActivite4() {
        return $this->couleurActivite4;
    }

    /**
     * Set the couleur activite4.
     *
     * @param int $couleurActivite4 The couleur activite4.
     */
    public function setCouleurActivite4($couleurActivite4) {
        $this->couleurActivite4 = $couleurActivite4;
        return $this;
    }
}
