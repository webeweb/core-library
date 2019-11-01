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
 * Reprise raison pers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepriseRaisonPersTrait {

    /**
     * Reprise raison pers.
     *
     * @var bool
     */
    private $repriseRaisonPers;

    /**
     * Get the reprise raison pers.
     *
     * @return bool Returns the reprise raison pers.
     */
    public function getRepriseRaisonPers() {
        return $this->repriseRaisonPers;
    }

    /**
     * Set the reprise raison pers.
     *
     * @param bool $repriseRaisonPers The reprise raison pers.
     */
    public function setRepriseRaisonPers($repriseRaisonPers) {
        $this->repriseRaisonPers = $repriseRaisonPers;
        return $this;
    }
}
