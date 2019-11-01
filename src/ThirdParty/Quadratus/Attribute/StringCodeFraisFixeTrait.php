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
 * Code frais fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFraisFixeTrait {

    /**
     * Code frais fixe.
     *
     * @var string
     */
    private $codeFraisFixe;

    /**
     * Get the code frais fixe.
     *
     * @return string Returns the code frais fixe.
     */
    public function getCodeFraisFixe() {
        return $this->codeFraisFixe;
    }

    /**
     * Set the code frais fixe.
     *
     * @param string $codeFraisFixe The code frais fixe.
     */
    public function setCodeFraisFixe($codeFraisFixe) {
        $this->codeFraisFixe = $codeFraisFixe;
        return $this;
    }
}
