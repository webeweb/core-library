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
 * Couleur activite3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite3Trait {

    /**
     * Couleur activite3.
     *
     * @var int
     */
    private $couleurActivite3;

    /**
     * Get the couleur activite3.
     *
     * @return int Returns the couleur activite3.
     */
    public function getCouleurActivite3() {
        return $this->couleurActivite3;
    }

    /**
     * Set the couleur activite3.
     *
     * @param int $couleurActivite3 The couleur activite3.
     */
    public function setCouleurActivite3($couleurActivite3) {
        $this->couleurActivite3 = $couleurActivite3;
        return $this;
    }
}
