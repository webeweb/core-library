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
 * Code representant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRepresentantTrait {

    /**
     * Code representant.
     *
     * @var string
     */
    private $codeRepresentant;

    /**
     * Get the code representant.
     *
     * @return string Returns the code representant.
     */
    public function getCodeRepresentant() {
        return $this->codeRepresentant;
    }

    /**
     * Set the code representant.
     *
     * @param string $codeRepresentant The code representant.
     */
    public function setCodeRepresentant($codeRepresentant) {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }
}
