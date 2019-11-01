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
 * Saisie tp ne pas afficher dp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTpNePasAfficherDpTrait {

    /**
     * Saisie tp ne pas afficher dp.
     *
     * @var bool
     */
    private $saisieTpNePasAfficherDp;

    /**
     * Get the saisie tp ne pas afficher dp.
     *
     * @return bool Returns the saisie tp ne pas afficher dp.
     */
    public function getSaisieTpNePasAfficherDp() {
        return $this->saisieTpNePasAfficherDp;
    }

    /**
     * Set the saisie tp ne pas afficher dp.
     *
     * @param bool $saisieTpNePasAfficherDp The saisie tp ne pas afficher dp.
     */
    public function setSaisieTpNePasAfficherDp($saisieTpNePasAfficherDp) {
        $this->saisieTpNePasAfficherDp = $saisieTpNePasAfficherDp;
        return $this;
    }
}
