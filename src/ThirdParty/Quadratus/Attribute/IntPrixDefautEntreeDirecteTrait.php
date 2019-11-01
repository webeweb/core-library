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
 * Prix defaut entree directe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixDefautEntreeDirecteTrait {

    /**
     * Prix defaut entree directe.
     *
     * @var int
     */
    private $prixDefautEntreeDirecte;

    /**
     * Get the prix defaut entree directe.
     *
     * @return int Returns the prix defaut entree directe.
     */
    public function getPrixDefautEntreeDirecte() {
        return $this->prixDefautEntreeDirecte;
    }

    /**
     * Set the prix defaut entree directe.
     *
     * @param int $prixDefautEntreeDirecte The prix defaut entree directe.
     */
    public function setPrixDefautEntreeDirecte($prixDefautEntreeDirecte) {
        $this->prixDefautEntreeDirecte = $prixDefautEntreeDirecte;
        return $this;
    }
}
