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
 * Tp pas mois cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasMoisClotureTrait {

    /**
     * Tp pas mois cloture.
     *
     * @var bool
     */
    private $tpPasMoisCloture;

    /**
     * Get the tp pas mois cloture.
     *
     * @return bool Returns the tp pas mois cloture.
     */
    public function getTpPasMoisCloture() {
        return $this->tpPasMoisCloture;
    }

    /**
     * Set the tp pas mois cloture.
     *
     * @param bool $tpPasMoisCloture The tp pas mois cloture.
     */
    public function setTpPasMoisCloture($tpPasMoisCloture) {
        $this->tpPasMoisCloture = $tpPasMoisCloture;
        return $this;
    }
}
