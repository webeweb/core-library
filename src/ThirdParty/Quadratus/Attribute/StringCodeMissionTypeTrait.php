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
 * Code mission type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMissionTypeTrait {

    /**
     * Code mission type.
     *
     * @var string
     */
    private $codeMissionType;

    /**
     * Get the code mission type.
     *
     * @return string Returns the code mission type.
     */
    public function getCodeMissionType() {
        return $this->codeMissionType;
    }

    /**
     * Set the code mission type.
     *
     * @param string $codeMissionType The code mission type.
     */
    public function setCodeMissionType($codeMissionType) {
        $this->codeMissionType = $codeMissionType;
        return $this;
    }
}
