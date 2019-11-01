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
 * Tps num archive trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTpsNumArchiveTrait {

    /**
     * Tps num archive.
     *
     * @var string
     */
    private $tpsNumArchive;

    /**
     * Get the tps num archive.
     *
     * @return string Returns the tps num archive.
     */
    public function getTpsNumArchive() {
        return $this->tpsNumArchive;
    }

    /**
     * Set the tps num archive.
     *
     * @param string $tpsNumArchive The tps num archive.
     */
    public function setTpsNumArchive($tpsNumArchive) {
        $this->tpsNumArchive = $tpsNumArchive;
        return $this;
    }
}
