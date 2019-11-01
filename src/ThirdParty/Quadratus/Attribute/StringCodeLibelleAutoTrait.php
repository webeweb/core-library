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
 * Code libelle auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibelleAutoTrait {

    /**
     * Code libelle auto.
     *
     * @var string
     */
    private $codeLibelleAuto;

    /**
     * Get the code libelle auto.
     *
     * @return string Returns the code libelle auto.
     */
    public function getCodeLibelleAuto() {
        return $this->codeLibelleAuto;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string $codeLibelleAuto The code libelle auto.
     */
    public function setCodeLibelleAuto($codeLibelleAuto) {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }
}
