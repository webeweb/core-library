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
 * Regle scm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleScmTrait {

    /**
     * Regle scm.
     *
     * @var string
     */
    private $regleScm;

    /**
     * Get the regle scm.
     *
     * @return string Returns the regle scm.
     */
    public function getRegleScm() {
        return $this->regleScm;
    }

    /**
     * Set the regle scm.
     *
     * @param string $regleScm The regle scm.
     */
    public function setRegleScm($regleScm) {
        $this->regleScm = $regleScm;
        return $this;
    }
}
