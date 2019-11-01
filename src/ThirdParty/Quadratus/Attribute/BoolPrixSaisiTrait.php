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
 * Prix saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixSaisiTrait {

    /**
     * Prix saisi.
     *
     * @var bool
     */
    private $prixSaisi;

    /**
     * Get the prix saisi.
     *
     * @return bool Returns the prix saisi.
     */
    public function getPrixSaisi() {
        return $this->prixSaisi;
    }

    /**
     * Set the prix saisi.
     *
     * @param bool $prixSaisi The prix saisi.
     */
    public function setPrixSaisi($prixSaisi) {
        $this->prixSaisi = $prixSaisi;
        return $this;
    }
}
