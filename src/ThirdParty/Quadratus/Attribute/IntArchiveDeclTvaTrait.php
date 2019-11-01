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
 * Archive decl tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntArchiveDeclTvaTrait {

    /**
     * Archive decl tva.
     *
     * @var int
     */
    private $archiveDeclTva;

    /**
     * Get the archive decl tva.
     *
     * @return int Returns the archive decl tva.
     */
    public function getArchiveDeclTva() {
        return $this->archiveDeclTva;
    }

    /**
     * Set the archive decl tva.
     *
     * @param int $archiveDeclTva The archive decl tva.
     */
    public function setArchiveDeclTva($archiveDeclTva) {
        $this->archiveDeclTva = $archiveDeclTva;
        return $this;
    }
}
