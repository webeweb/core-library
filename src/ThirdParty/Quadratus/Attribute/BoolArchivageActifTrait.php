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
 * Archivage actif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchivageActifTrait {

    /**
     * Archivage actif.
     *
     * @var bool
     */
    private $archivageActif;

    /**
     * Get the archivage actif.
     *
     * @return bool Returns the archivage actif.
     */
    public function getArchivageActif() {
        return $this->archivageActif;
    }

    /**
     * Set the archivage actif.
     *
     * @param bool $archivageActif The archivage actif.
     */
    public function setArchivageActif($archivageActif) {
        $this->archivageActif = $archivageActif;
        return $this;
    }
}
