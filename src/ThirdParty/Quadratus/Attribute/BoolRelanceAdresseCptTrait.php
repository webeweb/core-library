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
 * Relance adresse cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRelanceAdresseCptTrait {

    /**
     * Relance adresse cpt.
     *
     * @var bool
     */
    private $relanceAdresseCpt;

    /**
     * Get the relance adresse cpt.
     *
     * @return bool Returns the relance adresse cpt.
     */
    public function getRelanceAdresseCpt() {
        return $this->relanceAdresseCpt;
    }

    /**
     * Set the relance adresse cpt.
     *
     * @param bool $relanceAdresseCpt The relance adresse cpt.
     */
    public function setRelanceAdresseCpt($relanceAdresseCpt) {
        $this->relanceAdresseCpt = $relanceAdresseCpt;
        return $this;
    }
}
