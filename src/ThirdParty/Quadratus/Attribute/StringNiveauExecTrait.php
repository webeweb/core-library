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
 * Niveau exec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauExecTrait {

    /**
     * Niveau exec.
     *
     * @var string
     */
    private $niveauExec;

    /**
     * Get the niveau exec.
     *
     * @return string Returns the niveau exec.
     */
    public function getNiveauExec() {
        return $this->niveauExec;
    }

    /**
     * Set the niveau exec.
     *
     * @param string $niveauExec The niveau exec.
     */
    public function setNiveauExec($niveauExec) {
        $this->niveauExec = $niveauExec;
        return $this;
    }
}
