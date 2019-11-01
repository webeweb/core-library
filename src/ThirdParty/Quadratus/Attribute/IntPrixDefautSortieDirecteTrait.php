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
 * Prix defaut sortie directe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixDefautSortieDirecteTrait {

    /**
     * Prix defaut sortie directe.
     *
     * @var int
     */
    private $prixDefautSortieDirecte;

    /**
     * Get the prix defaut sortie directe.
     *
     * @return int Returns the prix defaut sortie directe.
     */
    public function getPrixDefautSortieDirecte() {
        return $this->prixDefautSortieDirecte;
    }

    /**
     * Set the prix defaut sortie directe.
     *
     * @param int $prixDefautSortieDirecte The prix defaut sortie directe.
     */
    public function setPrixDefautSortieDirecte($prixDefautSortieDirecte) {
        $this->prixDefautSortieDirecte = $prixDefautSortieDirecte;
        return $this;
    }
}
