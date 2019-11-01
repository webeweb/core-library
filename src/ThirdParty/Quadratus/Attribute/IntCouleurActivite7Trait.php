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
 * Couleur activite7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite7Trait {

    /**
     * Couleur activite7.
     *
     * @var int
     */
    private $couleurActivite7;

    /**
     * Get the couleur activite7.
     *
     * @return int Returns the couleur activite7.
     */
    public function getCouleurActivite7() {
        return $this->couleurActivite7;
    }

    /**
     * Set the couleur activite7.
     *
     * @param int $couleurActivite7 The couleur activite7.
     */
    public function setCouleurActivite7($couleurActivite7) {
        $this->couleurActivite7 = $couleurActivite7;
        return $this;
    }
}
