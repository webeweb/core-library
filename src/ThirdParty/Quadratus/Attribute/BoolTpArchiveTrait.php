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
 * Tp archive trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpArchiveTrait {

    /**
     * Tp archive.
     *
     * @var bool
     */
    private $tpArchive;

    /**
     * Get the tp archive.
     *
     * @return bool Returns the tp archive.
     */
    public function getTpArchive() {
        return $this->tpArchive;
    }

    /**
     * Set the tp archive.
     *
     * @param bool $tpArchive The tp archive.
     */
    public function setTpArchive($tpArchive) {
        $this->tpArchive = $tpArchive;
        return $this;
    }
}
