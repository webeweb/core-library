<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringDataTrait;
use WBW\Library\Traits\Strings\StringIpAddressTrait;
use WBW\Library\Traits\Strings\StringQueryTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;

/**
 * Repository event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RepositoryEvent implements RepositoryEventInterface {

    use DateTimeDateTrait;
    use IntegerIdTrait;
    use StringDataTrait;
    use StringQueryTrait;
    use StringIpAddressTrait;
    use StringUrlTrait;

    /**
     * Entity.
     *
     * @var string|null
     */
    protected $entity;

    /**
     * Event.
     *
     * @var string|null
     */
    protected $event;

    /**
     * Request.
     *
     * @var string|null
     */
    protected $request;

    /**
     * Route.
     *
     * @var string|null
     */
    protected $route;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity(): ?string {
        return $this->entity;
    }

    /**
     * {@inheritdoc}
     */
    public function getEvent(): ?string {
        return $this->event;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest(): ?string {
        return $this->request;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoute(): ?string {
        return $this->route;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRepositoryEvent($this);
    }

    /**
     * {@inheritdoc}
     */
    public function setEntity(?string $entity): RepositoryEventInterface {
        $this->entity = $entity;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setEvent(?string $event): RepositoryEventInterface {
        $this->event = $event;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest(?string $request): RepositoryEventInterface {
        $this->request = $request;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRoute(?string $route): RepositoryEventInterface {
        $this->route = $route;
        return $this;
    }
}
