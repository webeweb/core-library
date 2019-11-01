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
 * Couleur activite6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurActivite6Trait {

    /**
     * Couleur activite6.
     *
     * @var int
     */
    private $couleurActivite6;

    /**
     * Get the couleur activite6.
     *
     * @return int Returns the couleur activite6.
     */
    public function getCouleurActivite6() {
        return $this->couleurActivite6;
    }

    /**
     * Set the couleur activite6.
     *
     * @param int $couleurActivite6 The couleur activite6.
     */
    public function setCouleurActivite6($couleurActivite6) {
        $this->couleurActivite6 = $couleurActivite6;
        return $this;
    }
}
