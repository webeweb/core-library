<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Manager;

use InvalidArgumentException;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Provider\StylesheetProviderInterface;

/**
 * Stylesheet manager.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Manager
 */
class StylesheetManager extends AbstractManager implements StylesheetManagerInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.manager.stylesheet";

    /**
     * {@inheritdoc}
     */
    public function addProvider(ProviderInterface $provider): ManagerInterface {

        if (true === $this->contains($provider)) {
            throw new AlreadyRegisteredProviderException($provider);
        }

        return parent::addProvider($provider);
    }

    /**
     * {@inheritdoc}
     */
    public function contains(ProviderInterface $provider): bool {

        if (false === ($provider instanceof StylesheetProviderInterface)) {
            throw new InvalidArgumentException("The provider must implements " . StylesheetProviderInterface::class);
        }

        return in_array($provider, $this->getProviders());
    }

    /**
     * {@inheritdoc}
     */
    public function getStylesheets(): array {

        $stylesheets = [];

        /** @var StylesheetProviderInterface $current */
        foreach ($this->getProviders() as $current) {
            $stylesheets = array_merge($stylesheets, $current->getStylesheets());
        }

        return $stylesheets;
    }
}
