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
 * Prix fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixFixeTrait {

    /**
     * Prix fixe.
     *
     * @var bool
     */
    private $prixFixe;

    /**
     * Get the prix fixe.
     *
     * @return bool Returns the prix fixe.
     */
    public function getPrixFixe() {
        return $this->prixFixe;
    }

    /**
     * Set the prix fixe.
     *
     * @param bool $prixFixe The prix fixe.
     */
    public function setPrixFixe($prixFixe) {
        $this->prixFixe = $prixFixe;
        return $this;
    }
}
