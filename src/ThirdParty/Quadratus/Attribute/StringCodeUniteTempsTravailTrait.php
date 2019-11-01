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
 * Code unite temps travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeUniteTempsTravailTrait {

    /**
     * Code unite temps travail.
     *
     * @var string
     */
    private $codeUniteTempsTravail;

    /**
     * Get the code unite temps travail.
     *
     * @return string Returns the code unite temps travail.
     */
    public function getCodeUniteTempsTravail() {
        return $this->codeUniteTempsTravail;
    }

    /**
     * Set the code unite temps travail.
     *
     * @param string $codeUniteTempsTravail The code unite temps travail.
     */
    public function setCodeUniteTempsTravail($codeUniteTempsTravail) {
        $this->codeUniteTempsTravail = $codeUniteTempsTravail;
        return $this;
    }
}
