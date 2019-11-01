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
 * Couleur activite9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite9Trait {

    /**
     * Couleur activite9.
     *
     * @var int
     */
    private $couleurActivite9;

    /**
     * Get the couleur activite9.
     *
     * @return int Returns the couleur activite9.
     */
    public function getCouleurActivite9() {
        return $this->couleurActivite9;
    }

    /**
     * Set the couleur activite9.
     *
     * @param int $couleurActivite9 The couleur activite9.
     */
    public function setCouleurActivite9($couleurActivite9) {
        $this->couleurActivite9 = $couleurActivite9;
        return $this;
    }
}
