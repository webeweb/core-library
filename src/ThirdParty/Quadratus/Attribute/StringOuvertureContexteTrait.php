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
 * Ouverture contexte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOuvertureContexteTrait {

    /**
     * Ouverture contexte.
     *
     * @var string
     */
    private $ouvertureContexte;

    /**
     * Get the ouverture contexte.
     *
     * @return string Returns the ouverture contexte.
     */
    public function getOuvertureContexte() {
        return $this->ouvertureContexte;
    }

    /**
     * Set the ouverture contexte.
     *
     * @param string $ouvertureContexte The ouverture contexte.
     */
    public function setOuvertureContexte($ouvertureContexte) {
        $this->ouvertureContexte = $ouvertureContexte;
        return $this;
    }
}
