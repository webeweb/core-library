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
 * A editer ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAEditerDucsTrait {

    /**
     * A editer ducs.
     *
     * @var bool
     */
    private $aEditerDucs;

    /**
     * Get the a editer ducs.
     *
     * @return bool Returns the a editer ducs.
     */
    public function getAEditerDucs() {
        return $this->aEditerDucs;
    }

    /**
     * Set the a editer ducs.
     *
     * @param bool $aEditerDucs The a editer ducs.
     */
    public function setAEditerDucs($aEditerDucs) {
        $this->aEditerDucs = $aEditerDucs;
        return $this;
    }
}
