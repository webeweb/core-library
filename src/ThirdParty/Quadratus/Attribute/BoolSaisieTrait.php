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
 * Saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTrait {

    /**
     * Saisie.
     *
     * @var bool
     */
    private $saisie;

    /**
     * Get the saisie.
     *
     * @return bool Returns the saisie.
     */
    public function getSaisie() {
        return $this->saisie;
    }

    /**
     * Set the saisie.
     *
     * @param bool $saisie The saisie.
     */
    public function setSaisie($saisie) {
        $this->saisie = $saisie;
        return $this;
    }
}
