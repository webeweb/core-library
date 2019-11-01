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
 * New db infos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNewDbInfosTrait {

    /**
     * New db infos.
     *
     * @var bool
     */
    private $newDbInfos;

    /**
     * Get the new db infos.
     *
     * @return bool Returns the new db infos.
     */
    public function getNewDbInfos() {
        return $this->newDbInfos;
    }

    /**
     * Set the new db infos.
     *
     * @param bool $newDbInfos The new db infos.
     */
    public function setNewDbInfos($newDbInfos) {
        $this->newDbInfos = $newDbInfos;
        return $this;
    }
}
