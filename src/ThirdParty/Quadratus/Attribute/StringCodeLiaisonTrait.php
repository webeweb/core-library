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
 * Code liaison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLiaisonTrait {

    /**
     * Code liaison.
     *
     * @var string
     */
    private $codeLiaison;

    /**
     * Get the code liaison.
     *
     * @return string Returns the code liaison.
     */
    public function getCodeLiaison() {
        return $this->codeLiaison;
    }

    /**
     * Set the code liaison.
     *
     * @param string $codeLiaison The code liaison.
     */
    public function setCodeLiaison($codeLiaison) {
        $this->codeLiaison = $codeLiaison;
        return $this;
    }
}
