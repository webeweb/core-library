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
 * Ed histo type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdHistoTypeTrait {

    /**
     * Ed histo type.
     *
     * @var string
     */
    private $edHistoType;

    /**
     * Get the ed histo type.
     *
     * @return string Returns the ed histo type.
     */
    public function getEdHistoType() {
        return $this->edHistoType;
    }

    /**
     * Set the ed histo type.
     *
     * @param string $edHistoType The ed histo type.
     */
    public function setEdHistoType($edHistoType) {
        $this->edHistoType = $edHistoType;
        return $this;
    }
}
