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
 * Copie backup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCopieBackupTrait {

    /**
     * Copie backup.
     *
     * @var string
     */
    private $copieBackup;

    /**
     * Get the copie backup.
     *
     * @return string Returns the copie backup.
     */
    public function getCopieBackup() {
        return $this->copieBackup;
    }

    /**
     * Set the copie backup.
     *
     * @param string $copieBackup The copie backup.
     */
    public function setCopieBackup($copieBackup) {
        $this->copieBackup = $copieBackup;
        return $this;
    }
}
