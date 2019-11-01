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
 * Interdire rd v hors travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireRdVHorsTravailTrait {

    /**
     * Interdire rd v hors travail.
     *
     * @var bool
     */
    private $interdireRdVHorsTravail;

    /**
     * Get the interdire rd v hors travail.
     *
     * @return bool Returns the interdire rd v hors travail.
     */
    public function getInterdireRdVHorsTravail() {
        return $this->interdireRdVHorsTravail;
    }

    /**
     * Set the interdire rd v hors travail.
     *
     * @param bool $interdireRdVHorsTravail The interdire rd v hors travail.
     */
    public function setInterdireRdVHorsTravail($interdireRdVHorsTravail) {
        $this->interdireRdVHorsTravail = $interdireRdVHorsTravail;
        return $this;
    }
}
