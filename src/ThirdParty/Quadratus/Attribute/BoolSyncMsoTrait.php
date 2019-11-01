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
 * Sync mso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSyncMsoTrait {

    /**
     * Sync mso.
     *
     * @var bool
     */
    private $syncMso;

    /**
     * Get the sync mso.
     *
     * @return bool Returns the sync mso.
     */
    public function getSyncMso() {
        return $this->syncMso;
    }

    /**
     * Set the sync mso.
     *
     * @param bool $syncMso The sync mso.
     */
    public function setSyncMso($syncMso) {
        $this->syncMso = $syncMso;
        return $this;
    }
}
