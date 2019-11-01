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
 * Code situ admin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSituAdminTrait {

    /**
     * Code situ admin.
     *
     * @var string
     */
    private $codeSituAdmin;

    /**
     * Get the code situ admin.
     *
     * @return string Returns the code situ admin.
     */
    public function getCodeSituAdmin() {
        return $this->codeSituAdmin;
    }

    /**
     * Set the code situ admin.
     *
     * @param string $codeSituAdmin The code situ admin.
     */
    public function setCodeSituAdmin($codeSituAdmin) {
        $this->codeSituAdmin = $codeSituAdmin;
        return $this;
    }
}
