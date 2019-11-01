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
 * Brut al modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBrutAlModifieTrait {

    /**
     * Brut al modifie.
     *
     * @var bool
     */
    private $brutAlModifie;

    /**
     * Get the brut al modifie.
     *
     * @return bool Returns the brut al modifie.
     */
    public function getBrutAlModifie() {
        return $this->brutAlModifie;
    }

    /**
     * Set the brut al modifie.
     *
     * @param bool $brutAlModifie The brut al modifie.
     */
    public function setBrutAlModifie($brutAlModifie) {
        $this->brutAlModifie = $brutAlModifie;
        return $this;
    }
}
