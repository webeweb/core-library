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
 * Retraite autre compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteAutreComplTrait {

    /**
     * Retraite autre compl.
     *
     * @var string
     */
    private $retraiteAutreCompl;

    /**
     * Get the retraite autre compl.
     *
     * @return string Returns the retraite autre compl.
     */
    public function getRetraiteAutreCompl() {
        return $this->retraiteAutreCompl;
    }

    /**
     * Set the retraite autre compl.
     *
     * @param string $retraiteAutreCompl The retraite autre compl.
     */
    public function setRetraiteAutreCompl($retraiteAutreCompl) {
        $this->retraiteAutreCompl = $retraiteAutreCompl;
        return $this;
    }
}
