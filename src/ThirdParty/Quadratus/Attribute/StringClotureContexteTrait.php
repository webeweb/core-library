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
 * Cloture contexte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClotureContexteTrait {

    /**
     * Cloture contexte.
     *
     * @var string
     */
    private $clotureContexte;

    /**
     * Get the cloture contexte.
     *
     * @return string Returns the cloture contexte.
     */
    public function getClotureContexte() {
        return $this->clotureContexte;
    }

    /**
     * Set the cloture contexte.
     *
     * @param string $clotureContexte The cloture contexte.
     */
    public function setClotureContexte($clotureContexte) {
        $this->clotureContexte = $clotureContexte;
        return $this;
    }
}
