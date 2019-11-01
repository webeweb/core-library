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
 * Code emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEmploiTrait {

    /**
     * Code emploi.
     *
     * @var string
     */
    private $codeEmploi;

    /**
     * Get the code emploi.
     *
     * @return string Returns the code emploi.
     */
    public function getCodeEmploi() {
        return $this->codeEmploi;
    }

    /**
     * Set the code emploi.
     *
     * @param string $codeEmploi The code emploi.
     */
    public function setCodeEmploi($codeEmploi) {
        $this->codeEmploi = $codeEmploi;
        return $this;
    }
}
