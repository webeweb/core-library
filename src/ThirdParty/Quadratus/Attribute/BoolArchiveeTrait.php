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
 * Archivee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchiveeTrait {

    /**
     * Archivee.
     *
     * @var bool
     */
    private $archivee;

    /**
     * Get the archivee.
     *
     * @return bool Returns the archivee.
     */
    public function getArchivee() {
        return $this->archivee;
    }

    /**
     * Set the archivee.
     *
     * @param bool $archivee The archivee.
     */
    public function setArchivee($archivee) {
        $this->archivee = $archivee;
        return $this;
    }
}
