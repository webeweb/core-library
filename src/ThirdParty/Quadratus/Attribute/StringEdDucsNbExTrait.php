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
 * Ed ducs nb ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdDucsNbExTrait {

    /**
     * Ed ducs nb ex.
     *
     * @var string
     */
    private $edDucsNbEx;

    /**
     * Get the ed ducs nb ex.
     *
     * @return string Returns the ed ducs nb ex.
     */
    public function getEdDucsNbEx() {
        return $this->edDucsNbEx;
    }

    /**
     * Set the ed ducs nb ex.
     *
     * @param string $edDucsNbEx The ed ducs nb ex.
     */
    public function setEdDucsNbEx($edDucsNbEx) {
        $this->edDucsNbEx = $edDucsNbEx;
        return $this;
    }
}
