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
 * Code liaison dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLiaisonDestTrait {

    /**
     * Code liaison dest.
     *
     * @var string
     */
    private $codeLiaisonDest;

    /**
     * Get the code liaison dest.
     *
     * @return string Returns the code liaison dest.
     */
    public function getCodeLiaisonDest() {
        return $this->codeLiaisonDest;
    }

    /**
     * Set the code liaison dest.
     *
     * @param string $codeLiaisonDest The code liaison dest.
     */
    public function setCodeLiaisonDest($codeLiaisonDest) {
        $this->codeLiaisonDest = $codeLiaisonDest;
        return $this;
    }
}
