<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager\Assets;

use InvalidArgumentException;
use WBW\Library\Symfony\Assets\Color\ColorHelper;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Manager\AbstractManager;
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Color manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager\Assets
 */
class ColorManager extends AbstractManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.manager.assets.color";

    /**
     * {@inheritDoc}
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface {

        if (true === $this->contains($provider)) {
            throw new AlreadyRegisteredProviderException($provider);
        }

        return parent::addProvider($provider);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(ProviderInterface $provider): bool {

        if (false === ($provider instanceof ColorProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements ColorProviderInterface");
        }

        $identifier = ColorHelper::getIdentifier($provider);
        foreach ($this->getProviders() as $current) {

            if ($identifier === ColorHelper::getIdentifier($current)) {
                return true;
            }
        }

        return false;
    }
}
