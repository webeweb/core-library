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
 * Code adherent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAdherentTrait {

    /**
     * Code adherent.
     *
     * @var string
     */
    private $codeAdherent;

    /**
     * Get the code adherent.
     *
     * @return string Returns the code adherent.
     */
    public function getCodeAdherent() {
        return $this->codeAdherent;
    }

    /**
     * Set the code adherent.
     *
     * @param string $codeAdherent The code adherent.
     */
    public function setCodeAdherent($codeAdherent) {
        $this->codeAdherent = $codeAdherent;
        return $this;
    }
}
