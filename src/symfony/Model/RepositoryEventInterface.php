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

use DateTime;
use JsonSerializable;

/**
 * Repository event interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
interface RepositoryEventInterface extends JsonSerializable {

    /**
     * Event "delete".
     *
     * @var string
     */
    const EVENT_DELETE = "delete";

    /**
     * Event "insert".
     *
     * @var string
     */
    const EVENT_INSERT = "insert";

    /**
     * Event "update".
     *
     * @var string
     */
    const EVENT_UPDATE = "update";

    /**
     * Get the data.
     *
     * @return string|null Returns the data.
     */
    public function getData(): ?string;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime;

    /**
     * Get the entity.
     *
     * @return string|null Returns the entity.
     */
    public function getEntity(): ?string;

    /**
     * Get the event.
     *
     * @return string|null Returns the event.
     */
    public function getEvent(): ?string;

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int;

    /**
     * Get the IP address.
     *
     * @return string|null Returns the IP address.
     */
    public function getIpAddress(): ?string;

    /**
     * Get the query.
     *
     * @return string|null Returns the query.
     */
    public function getQuery(): ?string;

    /**
     * Get the request.
     *
     * @return string|null Returns the request.
     */
    public function getRequest(): ?string;

    /**
     * Get the route.
     *
     * @return string|null Returns the route.
     */
    public function getRoute(): ?string;

    /**
     * Get the URL.
     *
     * @return string|null Returns the URL.
     */
    public function getUrl(): ?string;

    /**
     * Set the data.
     *
     * @param string|null $data The data.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setData(?string $data);

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setDate(?DateTime $date);

    /**
     * Set the entity.
     *
     * @param string|null $entity The entity.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setEntity(?string $entity): RepositoryEventInterface;

    /**
     * Set the event.
     *
     * @param string|null $event The event.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setEvent(?string $event): RepositoryEventInterface;

    /**
     * Set the IP address.
     *
     * @param string|null $ipAddress The IP address.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setIpAddress(?string $ipAddress);

    /**
     * Set the query.
     *
     * @param string|null $query The query.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setQuery(?string $query);

    /**
     * Set the request.
     *
     * @param string|null $request The request.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setRequest(?string $request): RepositoryEventInterface;

    /**
     * Set the route.
     *
     * @param string|null $route The route.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setRoute(?string $route): RepositoryEventInterface;

    /**
     * Set the URL.
     *
     * @param string|null $url The URL.
     * @return RepositoryEventInterface Returns this repository event.
     */
    public function setUrl(?string $url);
}
