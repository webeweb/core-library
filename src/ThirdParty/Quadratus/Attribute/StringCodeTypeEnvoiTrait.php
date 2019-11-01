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
 * Code type envoi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeEnvoiTrait {

    /**
     * Code type envoi.
     *
     * @var string
     */
    private $codeTypeEnvoi;

    /**
     * Get the code type envoi.
     *
     * @return string Returns the code type envoi.
     */
    public function getCodeTypeEnvoi() {
        return $this->codeTypeEnvoi;
    }

    /**
     * Set the code type envoi.
     *
     * @param string $codeTypeEnvoi The code type envoi.
     */
    public function setCodeTypeEnvoi($codeTypeEnvoi) {
        $this->codeTypeEnvoi = $codeTypeEnvoi;
        return $this;
    }
}
