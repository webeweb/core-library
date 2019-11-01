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
 * Archivage permanent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchivagePermanentTrait {

    /**
     * Archivage permanent.
     *
     * @var bool
     */
    private $archivagePermanent;

    /**
     * Get the archivage permanent.
     *
     * @return bool Returns the archivage permanent.
     */
    public function getArchivagePermanent() {
        return $this->archivagePermanent;
    }

    /**
     * Set the archivage permanent.
     *
     * @param bool $archivagePermanent The archivage permanent.
     */
    public function setArchivagePermanent($archivagePermanent) {
        $this->archivagePermanent = $archivagePermanent;
        return $this;
    }
}
