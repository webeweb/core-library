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
 * Code statut pro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeStatutProTrait {

    /**
     * Code statut pro.
     *
     * @var string
     */
    private $codeStatutPro;

    /**
     * Get the code statut pro.
     *
     * @return string Returns the code statut pro.
     */
    public function getCodeStatutPro() {
        return $this->codeStatutPro;
    }

    /**
     * Set the code statut pro.
     *
     * @param string $codeStatutPro The code statut pro.
     */
    public function setCodeStatutPro($codeStatutPro) {
        $this->codeStatutPro = $codeStatutPro;
        return $this;
    }
}
