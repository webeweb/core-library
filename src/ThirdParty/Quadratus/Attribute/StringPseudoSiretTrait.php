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
 * Pseudo siret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPseudoSiretTrait {

    /**
     * Pseudo siret.
     *
     * @var string
     */
    private $pseudoSiret;

    /**
     * Get the pseudo siret.
     *
     * @return string Returns the pseudo siret.
     */
    public function getPseudoSiret() {
        return $this->pseudoSiret;
    }

    /**
     * Set the pseudo siret.
     *
     * @param string $pseudoSiret The pseudo siret.
     */
    public function setPseudoSiret($pseudoSiret) {
        $this->pseudoSiret = $pseudoSiret;
        return $this;
    }
}
