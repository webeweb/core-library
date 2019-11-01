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
 * No doss paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoDossPaieTrait {

    /**
     * No doss paie.
     *
     * @var string
     */
    private $noDossPaie;

    /**
     * Get the no doss paie.
     *
     * @return string Returns the no doss paie.
     */
    public function getNoDossPaie() {
        return $this->noDossPaie;
    }

    /**
     * Set the no doss paie.
     *
     * @param string $noDossPaie The no doss paie.
     */
    public function setNoDossPaie($noDossPaie) {
        $this->noDossPaie = $noDossPaie;
        return $this;
    }
}
