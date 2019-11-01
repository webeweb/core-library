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
 * Nouvelle attest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNouvelleAttestTrait {

    /**
     * Nouvelle attest.
     *
     * @var bool
     */
    private $nouvelleAttest;

    /**
     * Get the nouvelle attest.
     *
     * @return bool Returns the nouvelle attest.
     */
    public function getNouvelleAttest() {
        return $this->nouvelleAttest;
    }

    /**
     * Set the nouvelle attest.
     *
     * @param bool $nouvelleAttest The nouvelle attest.
     */
    public function setNouvelleAttest($nouvelleAttest) {
        $this->nouvelleAttest = $nouvelleAttest;
        return $this;
    }
}
