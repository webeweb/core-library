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
 * Gestion specif jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionSpecifJfTrait {

    /**
     * Gestion specif jf.
     *
     * @var bool
     */
    private $gestionSpecifJf;

    /**
     * Get the gestion specif jf.
     *
     * @return bool Returns the gestion specif jf.
     */
    public function getGestionSpecifJf() {
        return $this->gestionSpecifJf;
    }

    /**
     * Set the gestion specif jf.
     *
     * @param bool $gestionSpecifJf The gestion specif jf.
     */
    public function setGestionSpecifJf($gestionSpecifJf) {
        $this->gestionSpecifJf = $gestionSpecifJf;
        return $this;
    }
}
