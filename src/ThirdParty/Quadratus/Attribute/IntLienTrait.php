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
 * Lien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLienTrait {

    /**
     * Lien.
     *
     * @var int
     */
    private $lien;

    /**
     * Get the lien.
     *
     * @return int Returns the lien.
     */
    public function getLien() {
        return $this->lien;
    }

    /**
     * Set the lien.
     *
     * @param int $lien The lien.
     */
    public function setLien($lien) {
        $this->lien = $lien;
        return $this;
    }
}
