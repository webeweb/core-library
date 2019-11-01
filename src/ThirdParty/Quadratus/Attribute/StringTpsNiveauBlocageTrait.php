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
 * Tps niveau blocage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTpsNiveauBlocageTrait {

    /**
     * Tps niveau blocage.
     *
     * @var string
     */
    private $tpsNiveauBlocage;

    /**
     * Get the tps niveau blocage.
     *
     * @return string Returns the tps niveau blocage.
     */
    public function getTpsNiveauBlocage() {
        return $this->tpsNiveauBlocage;
    }

    /**
     * Set the tps niveau blocage.
     *
     * @param string $tpsNiveauBlocage The tps niveau blocage.
     */
    public function setTpsNiveauBlocage($tpsNiveauBlocage) {
        $this->tpsNiveauBlocage = $tpsNiveauBlocage;
        return $this;
    }
}
