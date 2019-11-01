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
 * Interdire acces archives paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireAccesArchivesPaieTrait {

    /**
     * Interdire acces archives paie.
     *
     * @var bool
     */
    private $interdireAccesArchivesPaie;

    /**
     * Get the interdire acces archives paie.
     *
     * @return bool Returns the interdire acces archives paie.
     */
    public function getInterdireAccesArchivesPaie() {
        return $this->interdireAccesArchivesPaie;
    }

    /**
     * Set the interdire acces archives paie.
     *
     * @param bool $interdireAccesArchivesPaie The interdire acces archives paie.
     */
    public function setInterdireAccesArchivesPaie($interdireAccesArchivesPaie) {
        $this->interdireAccesArchivesPaie = $interdireAccesArchivesPaie;
        return $this;
    }
}
