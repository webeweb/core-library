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
 * Nom lettre pc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomLettrePcTrait {

    /**
     * Nom lettre pc.
     *
     * @var string
     */
    private $nomLettrePc;

    /**
     * Get the nom lettre pc.
     *
     * @return string Returns the nom lettre pc.
     */
    public function getNomLettrePc() {
        return $this->nomLettrePc;
    }

    /**
     * Set the nom lettre pc.
     *
     * @param string $nomLettrePc The nom lettre pc.
     */
    public function setNomLettrePc($nomLettrePc) {
        $this->nomLettrePc = $nomLettrePc;
        return $this;
    }
}
