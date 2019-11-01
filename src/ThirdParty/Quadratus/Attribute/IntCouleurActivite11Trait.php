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
 * Couleur activite11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite11Trait {

    /**
     * Couleur activite11.
     *
     * @var int
     */
    private $couleurActivite11;

    /**
     * Get the couleur activite11.
     *
     * @return int Returns the couleur activite11.
     */
    public function getCouleurActivite11() {
        return $this->couleurActivite11;
    }

    /**
     * Set the couleur activite11.
     *
     * @param int $couleurActivite11 The couleur activite11.
     */
    public function setCouleurActivite11($couleurActivite11) {
        $this->couleurActivite11 = $couleurActivite11;
        return $this;
    }
}
