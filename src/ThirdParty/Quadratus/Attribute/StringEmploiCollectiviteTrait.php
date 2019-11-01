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
 * Emploi collectivite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmploiCollectiviteTrait {

    /**
     * Emploi collectivite.
     *
     * @var string
     */
    private $emploiCollectivite;

    /**
     * Get the emploi collectivite.
     *
     * @return string Returns the emploi collectivite.
     */
    public function getEmploiCollectivite() {
        return $this->emploiCollectivite;
    }

    /**
     * Set the emploi collectivite.
     *
     * @param string $emploiCollectivite The emploi collectivite.
     */
    public function setEmploiCollectivite($emploiCollectivite) {
        $this->emploiCollectivite = $emploiCollectivite;
        return $this;
    }
}
