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
 * Couleur activite1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite1Trait {

    /**
     * Couleur activite1.
     *
     * @var int
     */
    private $couleurActivite1;

    /**
     * Get the couleur activite1.
     *
     * @return int Returns the couleur activite1.
     */
    public function getCouleurActivite1() {
        return $this->couleurActivite1;
    }

    /**
     * Set the couleur activite1.
     *
     * @param int $couleurActivite1 The couleur activite1.
     */
    public function setCouleurActivite1($couleurActivite1) {
        $this->couleurActivite1 = $couleurActivite1;
        return $this;
    }
}
