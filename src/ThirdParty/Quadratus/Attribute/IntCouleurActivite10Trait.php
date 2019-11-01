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
 * Couleur activite10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite10Trait {

    /**
     * Couleur activite10.
     *
     * @var int
     */
    private $couleurActivite10;

    /**
     * Get the couleur activite10.
     *
     * @return int Returns the couleur activite10.
     */
    public function getCouleurActivite10() {
        return $this->couleurActivite10;
    }

    /**
     * Set the couleur activite10.
     *
     * @param int $couleurActivite10 The couleur activite10.
     */
    public function setCouleurActivite10($couleurActivite10) {
        $this->couleurActivite10 = $couleurActivite10;
        return $this;
    }
}
