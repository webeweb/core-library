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
 * Prelevements perso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrelevementsPersoTrait {

    /**
     * Prelevements perso.
     *
     * @var string
     */
    private $prelevementsPerso;

    /**
     * Get the prelevements perso.
     *
     * @return string Returns the prelevements perso.
     */
    public function getPrelevementsPerso() {
        return $this->prelevementsPerso;
    }

    /**
     * Set the prelevements perso.
     *
     * @param string $prelevementsPerso The prelevements perso.
     */
    public function setPrelevementsPerso($prelevementsPerso) {
        $this->prelevementsPerso = $prelevementsPerso;
        return $this;
    }
}
