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
 * Preparer chantier pret only trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPreparerChantierPretOnlyTrait {

    /**
     * Preparer chantier pret only.
     *
     * @var bool
     */
    private $preparerChantierPretOnly;

    /**
     * Get the preparer chantier pret only.
     *
     * @return bool Returns the preparer chantier pret only.
     */
    public function getPreparerChantierPretOnly() {
        return $this->preparerChantierPretOnly;
    }

    /**
     * Set the preparer chantier pret only.
     *
     * @param bool $preparerChantierPretOnly The preparer chantier pret only.
     */
    public function setPreparerChantierPretOnly($preparerChantierPretOnly) {
        $this->preparerChantierPretOnly = $preparerChantierPretOnly;
        return $this;
    }
}
