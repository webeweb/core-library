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
 * Code groupe visu msg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeGroupeVisuMsgTrait {

    /**
     * Code groupe visu msg.
     *
     * @var string
     */
    private $codeGroupeVisuMsg;

    /**
     * Get the code groupe visu msg.
     *
     * @return string Returns the code groupe visu msg.
     */
    public function getCodeGroupeVisuMsg() {
        return $this->codeGroupeVisuMsg;
    }

    /**
     * Set the code groupe visu msg.
     *
     * @param string $codeGroupeVisuMsg The code groupe visu msg.
     */
    public function setCodeGroupeVisuMsg($codeGroupeVisuMsg) {
        $this->codeGroupeVisuMsg = $codeGroupeVisuMsg;
        return $this;
    }
}
