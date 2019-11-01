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
 * Nom lettre p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomLettrePTrait {

    /**
     * Nom lettre p.
     *
     * @var string
     */
    private $nomLettreP;

    /**
     * Get the nom lettre p.
     *
     * @return string Returns the nom lettre p.
     */
    public function getNomLettreP() {
        return $this->nomLettreP;
    }

    /**
     * Set the nom lettre p.
     *
     * @param string $nomLettreP The nom lettre p.
     */
    public function setNomLettreP($nomLettreP) {
        $this->nomLettreP = $nomLettreP;
        return $this;
    }
}
