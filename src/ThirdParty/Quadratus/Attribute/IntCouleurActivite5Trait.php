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
 * Couleur activite5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite5Trait {

    /**
     * Couleur activite5.
     *
     * @var int
     */
    private $couleurActivite5;

    /**
     * Get the couleur activite5.
     *
     * @return int Returns the couleur activite5.
     */
    public function getCouleurActivite5() {
        return $this->couleurActivite5;
    }

    /**
     * Set the couleur activite5.
     *
     * @param int $couleurActivite5 The couleur activite5.
     */
    public function setCouleurActivite5($couleurActivite5) {
        $this->couleurActivite5 = $couleurActivite5;
        return $this;
    }
}
